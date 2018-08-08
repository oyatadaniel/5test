@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
              <div id="login_title">
                <h4>Login</h4>
              </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email Address">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" style="margin-bottom: 0px;">
                            <div class="col-md-6">
                                <p style="margin-bottom: 0px;">
                                    <label style="margin-bottom: 0px;">
                                      <input type="checkbox" />
                                      <span>Remember Me</span>
                                    </label>
                                  </p>
                            </div>
                        </div><br>

                        <div class="form-group">
                            <div style="text-align: center;">
                                <button type="submit" class="btn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div style="text-align: center">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                        <div style="text-align: center">
                            <a class="btn btn-link" href="{{ route('register') }}">
                                {{ __('Dont have Account? Click Here') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
