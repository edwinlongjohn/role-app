
<x-app-layout>
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="d-md-flex justify-content-between">
                <div>
                    <h5 class="mb-0">Notifications</h5>

                    <nav aria-label="breadcrumb" class="d-inline-block mt-1">
                        <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                            <li class="breadcrumb-item text-capitalize"><a href="{{route('user.dashboard')}}">Role App</a></li>
                            <li class="breadcrumb-item text-capitalize active" aria-current="page">user's notifications</li>
                        </ul>
                    </nav>
                </div>

                {{-- <div class="mt-4 mt-sm-0">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newblogadd">Add Blog</a>
                </div> --}}
            </div>

            <div class="row">
                @foreach ($notifications as $notification)

                    <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                        <a href="{{route('user.notification', $notification)}}">
                        <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                            <div class="position-relative">
                                <img src="/user_assets/images/blog/0{{fmod($loop->iteration,5)}}.jpg" class="card-img-top" alt="...">
                                <div class="overlay rounded-top"></div>
                            </div>
                            <div class="card-body content">
                                <h5><a href="{{route('user.notification', $notification)}}" class="card-title title text-dark">{{$notification->title}}</a></h5>
                                <div class="post-meta d-flex justify-content-between mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="{{$notification->read == 0 ? 'uil uil-eye-slash text-danger' : 'uil uil-eye text-success'}} me-1"></i>{{$notification->read == 0 ? 'unread' : 'read'}}</a></li>

                                    </ul>
                                    <a href="{{route('user.notification', $notification)}}" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                            </div>
                            <div class="author">
                                <small class="text-white user d-block"><i class="uil uil-user"></i> {{Auth::user()->name}}</small>
                                <small class="text-white date"><i class="uil uil-calendar-alt"></i> {{$notification->created_at->diffForHumans()}}</small>
                            </div>
                        </div>
                    </a>
                    </div><!--end col-->


                @endforeach


            </div><!--end row-->


        </div>
    </div><!--end container-->
</x-app-layout>
