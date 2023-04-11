<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">{{ __('Email') }}</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" name="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit">{{ __('Login') }}</button>
        </div>
    </form>
    <p>
        Don't have an account? <a href="/create">Register</a>
    </p>
    
</body>
</html>