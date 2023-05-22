@extends('layouts.app2')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login/Register') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            <div class="form-group row">
                            </div>
                            <div class="form-group row mt-3">
                                <div class="col-md-8 offset-md-4">
                                    <a href="{{ route('google.login') }}" class="btn btn-google">
                                        <i class="fab fa-google"></i> Login with Google
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
