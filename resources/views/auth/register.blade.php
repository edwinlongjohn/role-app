<x-guest-layout>
    <!-- Register In start -->
    <section class="sign-in-up register">
        <div class="overlay pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-content">
                            <div class="section-header">
                                <h5 class="sub-title">The Power of Financial Freedom</h5>
                                <h2 class="title">Let’s Get Started!</h2>
                                <p>Please Enter your Email Address to Start your Online Application</p>
                            </div>
                            <form action="{{route('register')}}" method="POST"> @csrf
                                @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">
                                    {{$err}}
                                </p>
                                @endforeach

                                <div class="row">
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="fname">First Name</label>
                                            <input type="text" id="name" name="first_name" placeholder="Jone">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="single-input">
                                            <label for="lname">Last Name</label>
                                            <input type="text" id="lname" name="last_name" placeholder="Fisher">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="email">Enter Your Email ID</label>
                                            <input type="text" id="email" name="email" placeholder="Your email ID here">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="referral">Password</label>
                                            <input type="password"  name="password" placeholder="Enter the referral code">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <label for="referral">Confirm Password</label>
                                            <input type="password"  name="password_confirmation" placeholder="Enter the referral code">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input">
                                            <p>By clicking submit, you agree to <span>Bankio's Terms of Use, Privacy Policy, E-sign</span> & <span>communication Authorization.</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <button class="cmn-btn">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register In end -->
</x-guest-layout>
