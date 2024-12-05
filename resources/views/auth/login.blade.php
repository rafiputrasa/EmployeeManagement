@extends('layouts.appAuth')
<body class="bg-primary">

    @section('content')
            <div class="container-sm my-5">
                <div class="row justify-content-center">
                    <div class="p-5 bg-light rounded-3 col-lg-4 border" style="width: 25rem">
                        <div class="mb-3 text-center">
                            <i class="bi-hexagon-fill me-2 text-primary fs-1 p-1"></i>
                            <h4> <strong>Employee Data Master</strong> </h4>
                        </div>
                        <hr>
                        <div class="row">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-12 mb-3">
                                        <input id="email" type="email" for="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Enter Your Email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <input id="password" type="password" for='password'
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Enter Your Password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <hr>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <button type="submit" class="btn btn-primary "><i class="bi bi-box-arrow-in-right"></i>
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
</body>
@endsection
