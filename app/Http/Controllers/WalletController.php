<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Paystack;
class WalletController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ]);

        $user = Auth::user();
        $reference = Paystack::genTranxRef();
        $charge = 0.015 * $request->amount;
        $total = $charge + $request->amount;
        $total = round($total,2);


        //BEGIN NAIRA TRANSACTION
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->status = 'pending';
        $transaction->amount = $request->amount;
        $transaction->reference = $reference;
        $transaction->wallet_id = $user->nairaWallet->id;
        $transaction->save();

        $data = array(
            "amount" => $total * 100,
            "reference" => $reference,
            "email" => $user->email,
            "currency" => "NGN",
            "callback_url" => route('user.callback'),
        );

        try {
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        } catch (\Exception $e) {
            report($e->getMessage());
            $transaction->status = 'failed';
            $transaction->save();

            return back()->with(['error' => 'Transaction Failed try again later']);
        }
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        //dd($paymentDetails);
        if($paymentDetails['data']['status'] != 'success'){
            return back()->with(['error' => 'An error occured try again']);
        }

        $reference = $paymentDetails['data']['reference'];

        $transaction = Transaction::where('reference', $reference)->first();

        
        $user_wallet = Wallet::find($transaction->wallet_id);
         //check if transaction failed
         if ($transaction->status == "failed") {
            return back()->with(['error' => 'Failed transaction, please try again']);
        }

        //check if transaction has already been successful
        if ($transaction->status_id == 'successful') {
            return back()->with(['error' => 'Transaction already processed']);
        }

        $transaction->status = 'successful';
        $transaction->save();

        $user_wallet->balance += $transaction->amount;
        $user_wallet->save();


        return redirect()->route('user.dashboard')->with(['success' => 'Pament made successfully']);

    }
}
