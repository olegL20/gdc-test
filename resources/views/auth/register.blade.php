@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Регистрация</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="login" class="col-md-4 col-form-label text-md-right">{{ __('auth.Login') }}</label>

                            <div class="col-md-6">
                                <input id="login" type="text" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" name="login" value="{{ old('login') }}" required autofocus>

                                @if ($errors->has('login'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="skype" class="col-md-4 col-form-label text-md-right">{{ __('auth.Skype') }}</label>

                            <div class="col-md-6">
                                <input id="skype" type="text" class="form-control{{ $errors->has('skype') ? ' is-invalid' : '' }}" name="skype" value="{{ old('skype') }}" required autofocus>

                                @if ($errors->has('skype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('skype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="perf_money" class="col-md-4 col-form-label text-md-right">{{ __('auth.Perf_money') }}</label>

                            <div class="col-md-6">
                                <input id="perf_money" type="text" class="form-control{{ $errors->has('perf_money') ? ' is-invalid' : '' }}" name="perf_money" value="{{ old('perf_money') }}" required autofocus>

                                @if ($errors->has('perf_money'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('perf_money') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="payeer" class="col-md-4 col-form-label text-md-right">{{ __('auth.Payeer') }}</label>

                            <div class="col-md-6">
                                <input id="payeer" type="text" class="form-control{{ $errors->has('payeer') ? ' is-invalid' : '' }}" name="payeer" value="{{ old('payeer') }}" required autofocus>

                                @if ($errors->has('payeer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('payeer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('auth.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('auth.Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('auth.ConfirmPassword') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="confirm_18" class="col-md-4 col-form-label text-md-right">{{ __('auth.18') }}</label>

                            <div class="col-md-6">
                                <input id="confirm_18" type="checkbox" class="form-control{{ $errors->has('confirm_18') ? ' is-invalid' : '' }}" name="confirm_18" required>

                                @if ($errors->has('confirm_18'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('confirm_18') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
