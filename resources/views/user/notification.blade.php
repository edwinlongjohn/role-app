<x-app-layout>
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="d-md-flex justify-content-between">
                <div>
                    <h5 class="mb-0">Notification</h5>

                    <nav aria-label="breadcrumb" class="d-inline-block mt-1">
                        <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                            <li class="breadcrumb-item text-capitalize"><a href="{{route('user.dashboard')}}">Role App</a></li>
                            <li class="breadcrumb-item text-capitalize active" aria-current="page">user's notification</li>
                        </ul>
                    </nav>
                </div>

                {{-- <div class="mt-4 mt-sm-0">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newblogadd">Add Blog</a>
                </div> --}}
            </div>

            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-7 mt-4">
                    <div class="card blog blog-primary rounded border-0 shadow-lg overflow-hidden">

                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">{{$notification->title}}</a></h5>
                            <div>
                                {!! $notification->message !!}
                            </div>
                        </div>
                        <div class="mt-3 p-3 text-center">
                            <a href="{{route('user.dashboard')}}">
                                <button class="btn btn-primary btn-sm">Back to Dashbord</button>
                            </a>
                        </div>


                    </div>
                </div><!--end col-->



            </div><!--end row-->


        </div>
    </div><!--end container-->
</x-app-layout>
