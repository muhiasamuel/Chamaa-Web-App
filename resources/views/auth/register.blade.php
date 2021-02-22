@extends('layouts.app')

@section('content')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark" style="margin-top:10vh">
        
        <div class=" bg-dark border-top border-secondary">
            <div id="loginform"  >
                    <div class="text-center p-t-20 p-b-20">
                        <h2 class="db" style="color:#fff"> {{ __('Register') }}</h2>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fas fa-user-circle"></i></span>
                                    </div>

                            
                                <input id="admin_name" type="text" class="form-control form-control-lg @error('admin_name') is-invalid @enderror" placeholder="Username" aria-label="admin_name" aria-describedby="basic-addon1" name="admin_name" value="{{ old('admin_name') }}" >

                                @error('admin_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                    </div>

                            
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="email" aria-label="Email_Address" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                       
                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fas fa-phone"></i></span>
                                    </div>

                            
                                <input id="admin_phone" type="eadmin_phone" class="form-control form-control-lg @error('admin_phone') is-invalid @enderror" placeholder="admin_phone" aria-label="Email_Address" aria-describedby="basic-addon1" name="admin_phone" value="{{ old('admin_phone') }}" >

                                @error('admin_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="input-group mb-3">
                           
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon2"><i class="fas fa-lock"></i></span>
                                    </div>

                            
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" name="password" required >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>
                        <div class="input-group mb-3">
                           
                           <div class="input-group-prepend">
                               <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="fas fa-lock"></i></span>
                           </div>

                   
                       <input id="password-confirm" type="password" class="form-control form-control-lg" placeholder="Confirm Password" aria-label="Password" aria-describedby="basic-addon1" name="password_confirmation" required >

                      
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
@endsection
