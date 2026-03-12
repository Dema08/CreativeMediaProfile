@extends('users.layout.main')

@section('content')
<section class="sing-in-area pt-70 pb-120">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Form Login -->
            <div class="col-lg-6">
                <div class="sing-in-form-area mt-45 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <h4 class="sing-in-title"><i class="lni-user"></i> Admin <span>Login</span></h4>
                    <p class="text">Silakan login menggunakan username dan password admin Anda.</p>

                    <div class="sing-in-form-wrapper">

                        <!-- Error -->
                        @if($errors->any())
                            <div class="alert alert-danger">{{ $errors->first() }}</div>
                        @endif

                        <form action="{{ route('admin.login.submit') }}" method="POST">
                            @csrf

                            <div class="single-form mt-45">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>
                            </div>

                            <div class="single-form mt-45">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="******************" required>
                            </div>

                            <div class="single-form mt-35 d-sm-flex justify-content-between">
                                <div class="form-checkbox mt-10">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember"></label> <span>Remember Me</span>
                                </div>
                                <div class="form-forget mt-10">
                                    <a href="#">Forget Password?</a>
                                </div>
                            </div>

                            <div class="single-form mt-45">
                                <button type="submit" class="main-btn w-100">Login Now</button>
                            </div>
                        </form>

                        <div class="new-user text-center">
                            <p class="text">New user? <a href="#">Don't have an account?</a></p>
                        </div>
                    </div> <!-- sing-in-form-wrapper -->
                </div> <!-- sing-in-form-area -->
            </div>

        </div> <!-- row -->
    </div> <!-- container -->
</section>
@endsection
