@php
    $user = Auth::user();
    $notifications = $user->unreadNotifications()->take(5)->get();
@endphp
<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from shreethemes.in/landrick/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Feb 2023 12:41:03 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Role App - User Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in/" />
    <meta name="Version" content="v4.5.0" />

    <!-- favicon -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="/assets/imgs/favicon.ico">
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sweet-alert.css') }}">
    <link href="/user_assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    {{-- @vite(['resources/js/app.js']) --}}

    <!-- Icons Css -->
    <link href="/user_assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/user_assets/css/animate.min.css" type="text/css">
    <link href="/user_assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <!-- Bootstrap Css -->
    <link href="/user_assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Style Css-->
    <link href="/user_assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Loader -->
     <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    <!-- Loader -->

    <div class="page-wrapper toggled">
        <x-sidebar></x-sidebar>
        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <!-- Top Header -->
            <div class="top-header">
                <div class="header-bar d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <a href="#" class="logo-icon me-3">
                            <img src="/assets/imgs/logo/pp-logo.png" height="30" class="small" alt="">
                            <span class="big">
                                <img src="/assets/imgs/logo/pp-logo.png" height="24" class="logo-light-mode"
                                    alt="">
                                <img src="/assets/imgs/logo/pp-white.png" height="24" class="logo-dark-mode"
                                    alt="">
                            </span>
                        </a>
                        <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                        <div class="search-bar p-0 d-none d-md-block ms-2">
                            <div id="search" class="menu-search mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="form-control border rounded" name="s"
                                            id="s" placeholder="Search Keywords...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="list-unstyled mb-0">
                        {{-- <li class="list-inline-item mb-0">
                            <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight">
                                <div class="btn btn-icon btn-soft-light"><i class="ti ti-settings"></i></div>
                            </a>
                        </li> --}}

                        <li class="list-inline-item mb-0 ms-1">

                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-icon btn-soft-light dropdown-toggle p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ti ti-bell"></i></button>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>

                                <div class="dropdown-menu dd-menu shadow rounded border-0 mt-3 p-0" data-simplebar
                                    style="height: 320px; width: 290px;">
                                    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                        <h6 class="mb-0 text-dark">Notifications</h6>
                                        <span class="badge bg-soft-danger rounded-pill">3</span>
                                    </div>
                                    <div class="p-3">

                                        @foreach ($notifications as $notification)
                                        <a href="{{route('user.notification', $notification->id)}}"
                                        class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="icon text-center rounded-circle me-2">
                                                <i class="ti ti-currency-dollar"></i>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-0 text-dark title"><span class="fw-bold">{{$notification->title}}</span></h6>
                                                <small class="text-muted">{{$notification->created_at->diffForHumans()}}</small>
                                            </div>
                                        </div>
                                    </a>
                                        @endforeach






                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-soft-ligh dropdown-toggle p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="/user_assets/images/client/avatar.png"
                                        class="avatar avatar-ex-small rounded" alt=""></button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3"
                                    style="min-width: 200px;">

                                    <a class="dropdown-item text-dark" href="{{ route('user.dashboard') }}"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span>
                                        Dashboard</a>
                                    <a class="dropdown-item text-dark" href="profile.html"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span>
                                        Profile</a>
                                    <a class="dropdown-item text-dark" href="{{route('user.fund.wallet')}}"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-cash"></i></span>
                                        Fund Wallet</a>
                                    <div class="dropdown-divider border-top"></div>
                                    <a class="dropdown-item text-dark" href="#"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-cash"></i> Transfer Funds</span>
                                        </a>
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span>
                                        Logout</a>
                                    <form action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Top Header -->
            {{$slot}}

            <!-- Footer Start -->
            <footer class="shadow py-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-sm-start text-center mx-md-2">
                                <p class="mb-0 text-muted">©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> PesinalPadi.
                                </p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </footer><!--end footer-->
            <!-- End -->
        </main>

        <!-- page-wrapper -->
        <div id="loadingOverlay" class="loading-overlay">
            <div class="spinner"> Processing <span class="spinner-one"></span> <span class="spinner-two"></span>
                <span class="spinner-three"></span>
            </div>
        </div>
        <!-- Offcanvas Start -->
        {{-- <div class="offcanvas offcanvas-end shadow" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasLeftLabel" class="mb-0">
                    <img src="/assets/imgs/logo/pp-logo.png" height="24" class="light-version" alt="">
                    <img src="/assets/imgs/logo/pp-white.png" height="24" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark"
                    data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h6 class="fw-bold">Theme Options</h6>

                            <ul class="text-center style-switcher list-unstyled mt-4">
                                <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light"
                                        onclick="setTheme('style-rtl')"><img src="/user_assets/images/demos/rtl.png"
                                            class="img-fluid rounded-md shadow-md d-block mx-auto"
                                            style="width: 230px;" alt=""><span
                                            class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light"
                                        onclick="setTheme('style')"><img src="/user_assets/images/demos/ltr.png"
                                            class="img-fluid rounded-md shadow-md d-block mx-auto"
                                            style="width: 230px;" alt=""><span
                                            class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark"
                                        onclick="setTheme('style-dark-rtl')"><img
                                            src="/user_assets/images/demos/dark-rtl.png"
                                            class="img-fluid rounded-md shadow-md d-block mx-auto"
                                            style="width: 230px;" alt=""><span
                                            class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark"
                                        onclick="setTheme('style-dark')"><img
                                            src="/user_assets/images/demos/dark.png"
                                            class="img-fluid rounded-md shadow-md d-block mx-auto"
                                            style="width: 230px;" alt=""><span
                                            class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4"
                                        onclick="setTheme('style-dark')"><img
                                            src="/user_assets/images/demos/dark.png"
                                            class="img-fluid rounded-md shadow-md d-block mx-auto"
                                            style="width: 230px;" alt=""><span
                                            class="text-dark fw-medium mt-3 d-block">Dark Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4"
                                        onclick="setTheme('style')"><img src="/user_assets/images/demos/ltr.png"
                                            class="img-fluid rounded-md shadow-md d-block mx-auto"
                                            style="width: 230px;" alt=""><span
                                            class="text-dark fw-medium mt-3 d-block">Light Version</span></a></li>
                                <li class="d-grid"><a
                                        href="https://shreethemes.in/landrick/landing/{{ route('user.dashboard') }}"
                                        target="_blank" class="mt-4"><img
                                            src="/user_assets/images/demos/landing.png"
                                            class="img-fluid rounded-md shadow-md d-block mx-auto"
                                            style="width: 230px;" alt=""><span
                                            class="text-dark fw-medium mt-3 d-block">Landing</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon social mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank"
                            class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a>
                    </li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank"
                            class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a>
                    </li>
                    <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank"
                            class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank"
                            class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/"
                            target="_blank" class="rounded"><i class="uil uil-instagram align-middle"
                                title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank"
                            class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i
                                class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in/" target="_blank"
                            class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div> --}}
        <!-- Offcanvas End -->

        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="/user_assets/libs/feather-icons/feather.min.js"></script>
        <script src="/user_assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('user_assets/js/app.js')}}" ></script>
        <!-- ckeditor -->
        <script src="{{ mix('js/app.js') }}"></script>
        {{-- <script src="/user_assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script> --}}
        <script src="/user_assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="/asset/js/plugins/sweet-alert.js"></script>
        <script src="/asset/js/vendor/jquery-3.6.0.min.js"></script>
        {{-- <script src="{{ mix('js/app.js') }}" ></script> --}}
        <script src="{{asset('user_assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Main Js -->
        <script src="/user_assets/js/plugins.init.js"></script>

        @yield('scripts')
        <script>
            function submitForm(e, id) {
                //console.log(id);
                const form = $('.padi-form-' + id);
                const submitButton = $('.submitButton');
                const loadingOverlay = $('#loadingOverlay');
                //console.log(loadingOverlay);

                e.preventDefault();

                loadingOverlay.css('display', 'flex'); // Show the loading overlay
                submitButton.disabled = true;
                submitButton.text('processing');
                // Disable the submit button

                // Simulate form submission delay
                setTimeout(() => {
                    form.submit(); // Submit the form after the delay
                }, 1000); // Adjust the delay time as needed

            }

            function confirmPurchase(e, id) {
                let amount = $('.inputted-amount').val();
                let phone = $('.phone').val();
                let network = $('.network').val();
                if (!amount || !phone || !network) {
                    Swal.fire({
                        title: "Please fill empty fields",
                        backdrop: `
                    rgba(0,0,123,0.4)

                    `,
                        showClass: {
                            popup: `
                                animate__animated
                                animate__fadeInUp
                                animate__faster
                                    `
                        },
                        hideClass: {
                            popup: `
                                animate__animated
                                animate__fadeOutDown
                                animate__faster
                                `
                        },
                        text: "",
                        icon: "warning",
                    });

                    return;
                }
                if(network == '1'){
                    //console.log(' i got here');
                    network = 'mtn'
                }
                if(network == '2'){
                    network = 'glo'
                }
                if(network == "3"){
                    network = 'airtel'
                }
                if(network == "4"){
                    network = '9mobile'
                }
                swal.fire({
                    title: "Please Confirm your purchase!",

                    icon: "warning",
                    //showDenyButton: true,
                    showDenyButton: true,
                    confirmButtonText: "proceed",
                    denyButtonText: 'cancel',

                    denyButtonColor: "#d33",
                    backdrop: `
                    rgba(0,0,123,0.4)

                    `,
                    html: `<p>Network:${network} </p>
                    <p>Mobile: ${phone}  </p>
                    <p>Amount: NGN ${amount} </p>`

                }).then((result) => {
                    if (result.isConfirmed) {
                        submitForm(e, id);

                    } else if (Swal.DismissReason.backdrop) {
                        Swal.fire("Purchase Cancelled", "", "info");
                    } else if (result.isDenied) {
                        Swal.fire("Purchase Cancelled", "", "info");
                    }
                });
            }


        </script>

        @if (session()->has('success'))
            <script>
                swal.fire({
                    title: "Good job!",
                    text: "{{ session()->get('success') }}",
                    icon: "success",
                    button: "Aww yess!",
                    backdrop: `
                    rgba(0,0,123,0.4)
                    `,
                });
            </script>
        @endif

        @if (session()->has('error'))
            <script>
                swal.fire({
                    title: "Ooops!",
                    text: "{{ session()->get('error') }}",
                    icon: "error",
                    button: "OK",
                    backdrop: `
                    rgba(0,0,123,0.4)

                    `,
                });
            </script>
        @endif



</body>



</html>
