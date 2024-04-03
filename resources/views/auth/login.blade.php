<x-guest-layout>
    <!-- Session Status -->
     <!-- Login In start -->
     <section class="sign-in-up login">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-content">
                            <div class="section-header">
                                <h5 class="sub-title">The Power of Financial Freedom</h5>
                                <h2 class="title">Set Up Your Password</h2>
                                <p>Your security is our top priority. You'll need this to log into your bankio account</p>
                            </div>
                            <form action="{{route('login')}}" method="POST"> @csrf
                                @foreach ($errors->all() as $err)
                                    <p class="alert alert-danger">{{$err}}</p>
                                @endforeach
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email">Enter Your Email ID</label>
                                            <input type="text" id="email" name="email" placeholder="Your email ID here">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input ">
                                            <label for="confirmPass">Confirm Password</label>
                                            <div class="password-show d-flex align-items-center">
                                                <input type="text" class="passInput" name="password" id="confirmPass" autocomplete="off" placeholder="Enter Your Password">
                                                <img class="showPass" src="assets/images/icon/show-hide.png" alt="icon">
                                            </div>
                                            <div class="forgot-area text-end">
                                                <a href="javascript:void(0)" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button class="cmn-btn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login In end -->
</x-guest-layout>
