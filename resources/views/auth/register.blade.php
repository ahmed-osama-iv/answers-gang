{{--@extends('Ehab.join')--}}

{{--@section('content')--}}
        <div class="form-container sign-up-container">
            <form method="POST" class="SignUP_form" action="{{ route('register') }}">
                @csrf
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <!--***************First Name**************-->
                <div class="input-field">
                    <i class="material-icons prefix">person</i>
                    <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="name">First Name</label>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!--***************Email**************-->
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="email">Email</label>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!--***************Password**************-->
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label for="password">Password</label>
                </div>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <!--***************Confirm Password**************-->
                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                    <label for="password-confirm">Confirm Password</label>
                </div>
                <button type="submit" class="btn waves-effect waves-purple " style="width: 40%">Sign Up Now</button>
            </form>
        </div>
        <!---********************LOGIN Form***************************************************-->
        <!---********************LOGIN Form***************************************************-->
        <!---********************LOGIN Form***************************************************-->
        <!---********************LOGIN Form***************************************************-->
        <div class="form-container sign-in-container">
        <h2 class="ra8yTitle">get in touch with us</h2>
       

                  
        <a class="btn-floating pink darken-11 z-depth-5 pulse iconnn" ><i class="material-icons white-text " >help</i> </a><p  class=" ra8y"onclick="M.toast({html: 'Gang will serve Gang will be of service'})">Answers' Gang</p>
     

         
            
        </div>
        <!---********************/LOGIN Form***************************************************-->
        <!---********************/LOGIN Form***************************************************-->
        <!---********************/LOGIN Form***************************************************-->
        <!---********************/LOGIN Form***************************************************-->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="btn" id="signIn">Log in</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="btn" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
{{--@endsection--}}
