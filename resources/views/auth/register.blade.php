<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-300">
    <form method="POST" action="/register">
        @csrf
    
        <div>
            <label for="name">Name</label>
    
            <div>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div>
            <label for="email">Email</label>
    
            <div>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div>
            <label for="password">Password</label>
    
            <div>
                <input id="password" type="password" name="password" required>
    
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
        </div>
    
        <div>
            <label for="password_confirmation">Confirm Password</label>
    
            <div>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
            </div>
        </div>
    
        <div>
            <div>
                <button type="submit">Register</button>
            </div>
        </div>
    </form>
    
</body>
</html>