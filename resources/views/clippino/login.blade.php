@extends('clippino.common')
@section('login')
<!-- navbar area end -->

    <!-- breadcumb area start -->
    <section class="breadcrumb-area breadcrumb-bg about">
        <div class="contiainer">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-inner">
                        <span class="subtitle">Every Time - Any Time!</span>
                        <h1 class="title">Login Now</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcumb area end -->

    <!-- singup page content area -->
    <div class="signup-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 remove-col-padding">
                    <div class="signup-form-wrapper">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="row remove-col-padding">
                          
                                <div class="col-lg-6">
                                    <div class="form-element margin-bottom-35">
                                        <label for="first_name">Email
                                            <span>**</span>
                                        </label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-element margin-bottom-35">
                                        <label for="last_name">Password
                                            <span>**</span>
                                        </label>
                                         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                </div>
                            
                            </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- singup page content end -->
@endsection
