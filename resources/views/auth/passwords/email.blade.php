@extends('layouts.app')

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark" style="margin-top:20vh">
        
        <div class=" bg-dark border-top border-secondary">
       
        <div class="text-center p-t-20 p-b-20">
                        <h2 class="db" style="color:#fff">{{ __('Reset Password') }}</h2>
                    </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fas fa-user-circle"></i></span>
                                    </div>

                            
                                <input id="email" type="email" class="form-control form-control-lg" placeholder="email" aria-label="Email_Address" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row mb-2">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
           
    </div>
</div>
@endsection
