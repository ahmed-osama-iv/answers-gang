
            <h2>Login</h2>
            <p>If you have an account you already have a friend, all you have to do is Login only  </p>
<form class="Login_form" action="{{route('login')}}" method="POST"  >
    @csrf
    <div class="input-field">
        <i class="material-icons prefix">person</i>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label for="email">Your Email</label>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-field">
        <i class="material-icons prefix">lock</i>
        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <label for="password">Your password</label>
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
   input checkbox
    <div>
        <p>
            <label>
                <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                <span>Remember Me</span>
            </label>
        </p>
    </div>
    <div style="margin-bottom: 10px">
        @if (Route::has('password.request'))
            <a class="" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </div>
    <button type="submit" class="btn waves-effect waves-purple btn-large" style="width: 100%">Login</button>
</form>


