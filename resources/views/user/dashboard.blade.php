
<x-app-layout>


    <div class="container-fluid">
        <div class="layout-specing">
            <div class="card card-rounded shadow-m border-0 p-4">
                <div class="d-flex align-items-center justify-content-between">

                    <div>
                        <h6 class="text-muted mb-1">Welcome back, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6>
                        <h5 class="mb-0">Dashboard</h5>
                    </div>




                </div>
                <div class="row">
                    <x-wallet-balance></x-wallet-balance>

                </div>

            </div>

            <div class="row row-cols-xl-5 row-cols-md-2 row-cols-1">

                <!--end col-->
                <div class="col mt-4">
                    <a href="{{ route('user.fund.wallet') }}"
                        class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                        <div class="d-flex align-items-center">
                            <div class="icon text-center rounded-pill shadow-md">
                                <img class="img-fluid fs-4 mb-0" src="user_assets/images/icon/money.png" width="40px"
                                    height="40px">
                            </div>
                            <div class="flex-1 ms-3">
                                <h6 class="mb-0 text-muted">Fund Wallet</h6>
                                <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-valu"
                                        data-target="4855">Click me</span></p>
                            </div>
                        </div>

                        {{-- <span class="text-success"><i class="uil uil-arrow-growth"></i> 3.84%</span> --}}
                    </a>
                </div>
                <!--end col-->



            </div>
            <!--end row-->

            <div class="row">
                <div class="col-xl-12 mt-4">
                    <div class="card border-0">
                        <div class="d-flex justify-content-between p-4 shadow rounded-top">
                            <h6 class="fw-bold mb-0">Lastest Transactions</h6>

                            <ul class="list-unstyled mb-0">
                                <li class="dropdown dropdown-primary list-inline-item">
                                    <button type="button"
                                        class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-2">
                                        <a class="dropdown-item text-dark" href="#"> View All</a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!--end col-->

                {{-- <div class="col-xl-4 col-lg-5 mt-4 rounded">
                    <div class="card shadow border-0">
                        <div class="p-4 border-bottom">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0 fw-bold">Videos</h6>

                                <a href="#!" class="text-primary">See More <i
                                        class="uil uil-arrow-right align-middle"></i></a>
                            </div>
                        </div>

                        <div class="p-4" data-simplebar> --}}

                            {{-- <a href="javascript:void(0)"
                                class="features feature-danger key-feature d-flex align-items-center justify-content-between mt-4">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-circle me-3">
                                        <i class="ti ti-video-plus"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 text-dark">Movie Night</h6>
                                        <small class="text-muted">Today 6:00pm</small>
                                    </div>
                                </div>

                                <i class="ti ti-arrow-down text-success"></i>
                            </a> --}}




                        {{-- </div>
                    </div>
                </div> --}}
                <!--end col-->
            </div>
            <!--end row-->


        </div>
    </div>
    <!--end container-->

    @section('scripts')
    <script>
        function copy(text) {
            window.navigator.clipboard.writeText(text);
            let button = $('.copy-btn');
            button.removeClass('btn-secondary');
            button.addClass('btn-primary');
            button.html('link copied');

            setTimeout(() => {
                button.removeClass('btn-primary');
                button.addClass('btn-secondary');
                button.html('copy link');
            }, 5000);
        }

    </script>
    @endsection
    <!--End page-content" -->
</x-app-layout>
