@extends('layouts.app')

@section('content')


         
    <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark" style="margin-top:20vh">
        
        <div class=" bg-dark border-top border-secondary">
            <div id="loginform"  >
                    <div class="text-center p-t-20 p-b-20">
                        <h2 class="db" style="color:#fff">{{ __('Login') }}</h2>
                    </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}"  class="form-horizontal m-t-20" id="loginform">
                        @csrf
                   <div class="row p-b-30">
                      <div class="col-12">

                  
                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fas fa-user-circle"></i></span>
                                    </div>

                            
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="email" aria-label="Email_Address" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="input-group mb-3">
                           
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon2"><i class="fas fa-lock"></i></span>
                                    </div>

                            
                                <input id="password" type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>
                        </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" style="color:#fff" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                            <div class="row border-top border-secondary">
                                <div class="col-12">

                                    <div class="form-group">
                                        <div class="p-t-20" style="padding:14px ">
                                        <button class="btn btn-success " type="submit">Login</button>

                                     @if (Route::has('password.request'))
                                    <a class=" float-right" href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i>
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                     @endif   
                                    

                                        </div>  
                                    </div>
                                </div>
                            </div>
                            

                    </form>
                </div>
           
        </div>
    

</div>

@endsection

