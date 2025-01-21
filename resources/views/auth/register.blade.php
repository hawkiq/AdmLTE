@extends('admlte::master', ['auth_type' => 'login'])
@section('title', __('admlte::main.register'))

@php($login_url = View::getSection('login_url') ?? config('admlte.login_url', 'login'))
@php($register_url = View::getSection('register_url') ?? config('admlte.register_url', 'register'))


@section('body')
    <div class="register-box">
        <!-- /.register-logo -->
        <div
            class="card {{ config('admlte.auth_card_fill_class') }} {{ config('admlte.auth_card_fill') ? '' : 'card-outline' }} {{ config('admlte.auth_card_color') }}">
            <div class="card-header">
                <h2 class="mb-0">{{ config('admlte.website_name') }} <img src="{{ asset(config('admlte.logo_img')) }}"
                        class="img-fluid" /> </h2>
            </div>
            <div class="card-body register-card-body">
                <p class="register-box-msg">{{ __('admlte::main.register_hint') }}</p>
                <form action="{{ route($register_url) }}" method="post">
                    @csrf
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerFullName" name="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                placeholder="" />
                            <label for="registerFullName">{{ __('admlte::main.full_name') }}</label>
                        </div>
                        <div class="input-group-text"><span class="fas fa-fw fa-user"></span></div>
                        @error('name')
                            <div class="invalid-feedback d-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerEmail" name="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                placeholder="" />
                            <label for="registerEmail">{{ __('admlte::main.email') }}</label>
                        </div>
                        <div class="input-group-text"><span class="fas fa-fw fa-envelope"></span></div>
                        @error('email')
                            <div class="invalid-feedback d-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerPassword" name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="" />
                            <label for="registerPassword">{{ __('admlte::main.password') }}</label>
                        </div>
                        <div class="input-group-text"><span class="fas fa-fw fa-lock"></span></div>
                        @error('password')
                            <div class="invalid-feedback d-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerPassword" name="password_confirmation" type="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="" />
                            <label for="registerPassword">{{ __('admlte::main.password_confirmation') }}</label>
                        </div>
                        <div class="input-group-text"><span class="fas fa-fw fa-lock"></span></div>
                        @error('password')
                            <div class="invalid-feedback d-block">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <!--begin::Row-->
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button type="submit"
                                    class="btn {{ config('admlte.auth_card_btn_color', 'btn-primary') }}">{{ __('admlte::main.register') }}</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!--end::Row-->
                </form>
                {{-- <div class="social-auth-links text-center mb-3 d-grid gap-2">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-primary">
                        <i class="bi bi-facebook me-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-danger">
                        <i class="bi bi-google me-2"></i> Sign in using Google+
                    </a>
                </div> --}}
                <!-- /.social-auth-links -->
                <p class="mt-3">
                    <a class='link-primary text-center'
                        href='{{ route($login_url) }}'>{{ __('admlte::main.already_signed') }} </a>
                </p>
            </div>
            <!-- /.register-card-body -->
        </div>
    </div>
    <!-- /.register-box -->
@endsection
