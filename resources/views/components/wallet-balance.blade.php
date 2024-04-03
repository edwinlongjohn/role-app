<div class="col-md-7 mt-3">

    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card rounded shadow pe-md-3 border-0">

                <div class="row">
                    <div class="col-4 ">
                        <div class="row">
                            <div class="card card-body shadow-md border-0 p-3 col-12">
                                <img src="{{ asset('user_assets/images/icon/wallet.png') }}"
                                    class="img-fluid" alt="card-img">
                            </div>
                        </div>

                    </div>
                    <div class="col-8 my-auto">
                        <p class="pt-2"><span class="text-primary">Naira wallet Balance:</span>
                            NGN{{ number_format(Auth::user()->nairaWallet->balance, 2) }}</p>
                    </div>

                </div>


            </div>
        </div>
       
    </div>
</div>
