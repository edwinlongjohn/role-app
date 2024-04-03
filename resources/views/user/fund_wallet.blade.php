

<x-app-layout>
    @php
    $id_one = \Str::random(3).uniqid();
    $id_two = \Str::random(4).uniqid();
    $id_three = \Str::random(2).uniqid();
    $id_four = \Str::random(1).uniqid();
    @endphp
    <!-- Top Header -->

    <div class="container-fluid">
        <div class="layout-specing">
            <div class="d-md-flex justify-content-between align-items-center">
                <h5 class="mb-0">Finance/ FundWallet</h5>

                <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
                    <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                        <li class="breadcrumb-item text-capitalize"><a
                                href="{{route('user.fund.wallet')}}">Role App</a></li>
                        <li class="breadcrumb-item text-capitalize"><a href="{{route('user.fund.wallet')}}">finalcial
                                Operations</a></li>
                        <li class="breadcrumb-item text-capitalize active" aria-current="page">Fund Wallet</li>
                    </ul>
                </nav>
            </div>

            <div class="row g-2">
                <div class="col-xl-3 col-lg-4 col-md-5 col-12 mt-4">
                    <div class="card rounded border-0 shadow p-4">


                        <ul class="nav nav-pills nav-link-soft nav-justified flex-column bg-white-color mt-4 mb-0"
                            id="pills-tab" role="tablist">


                            <li class="nav-item ">
                                <a class="nav-link rounded active" id="starred-tab" data-bs-toggle="pill" href="#starred"
                                    role="tab" aria-controls="starred" aria-selected="false">
                                    <div class="text-start px-3">
                                        <span class="mb-0"><i
                                                class="uil uil-file-copy-alt h5 align-middle me-2 mb-0"></i>
                                            Paystack</span>
                                    </div>
                                </a>
                                <!--end nav link-->
                            </li>
                            <!--end nav item-->




                        </ul>
                        <!--end nav pills-->
                    </div>
                </div>
                <!--end col-->

                <div class="col-xl-9 col-lg-8 col-md-7 col-12 mt-4">
                    <div class="tab-content rounded-0 shadow-0 " id="pills-tabContent">


                        <div class="tab-pane fade rounded show active" id="starred" role="tabpanel" aria-labelledby="starred-tab">
                            <div class="card rounded shadow p-4 border-0">
                                <h4 class="mb-3">FUND WITH PAYSTACK - Instant Funding </h4>
                                <form action="{{route('user.pay')}}" class="padi-form-{{$id_four}}" method="POST"> @csrf
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <label for="firstName" class="form-label">Amount <span
                                                    class="text-danger">1.5% charge</span> <span class="paystack-amount"
                                                    class="text-success"></span></label>
                                            <input type="number" name="amount" class="form-control amount"
                                                placeholder="Enter Amount"
                                                onkeyup="actualAmount('.paystack-amount', '.amount')"
                                                value="{{old('paystackAmount')}}" required>
                                            @error('amount')
                                            <span class="text-danger"> {{ $message }}</span>
                                            @enderror

                                        </div>



                                        <button class="w-100 btn btn-primary submitButton" type="button"
                                            onclick="submitForm(event, '{{$id_four}}')">Make Payment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end teb pane-->






                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
    </div>
    <!--end container-->



    @section('scripts')
    <script>
        //console.log(amount);

        function round(value, exp) {
            if (typeof exp === 'undefined' || +exp === 0)
                return Math.round(value);

            value = +value;
            exp = +exp;

            if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0))
                return NaN;

            // Shift
            value = value.toString().split('e');
            value = Math.round(+(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp)));

            // Shift back
            value = value.toString().split('e');
            return +(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp));
        }

        function actualAmount(amount, input, deduction = 0) {
            //alert('i got here');

            let amountEntered = parseInt($(input).val());
            let charge = 0.015 * amountEntered;
            let totalAmount = charge + amountEntered
            totalAmount = round(totalAmount, 2)
            let realAmount = $(amount);
            let text = '<em>NGN </em>';
            //console.log(amountEntered);
            if (deduction != 0) {
                totalAmount = (amountEntered - deduction);
                totalAmount = round(totalAmount, 2);
                text = '<em class="text-success">Funded amount: NGN </em>'
            }
            let formattedAmount = totalAmount.toLocaleString(window.document.documentElement.lang);
            realAmount.html(text + formattedAmount);


        }

        function copy(text) {
            window.navigator.clipboard.writeText(text);
            Swal.fire({
                title: "Nice!",
                text: "Account number copied",
                icon: "success",

            })



        }

    </script>
    @endsection
</x-app-layout>

