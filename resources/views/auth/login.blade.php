<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-300 w-full">
    <nav class="w-full bg-teal-600 px-4 py-5">
        <h1 class="font-bold text-4xl text-center text-white">JWT Athentication</h1>
    </nav>
    <div class="w-full flex justify-center items-center h-[70vh]">
        <div class="w-1/3 bg-slate-400 h-auto rounded-md px-8 py-4">
            <h1 class="text-2xl font-bold text-center">Login Form</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="py-2">
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" class="px-4 py-2 w-full rounded" type="email" name="email" value="{{ old('email') }}"
                        required autofocus>
                    @error('email')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="py-2">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" class="px-4 py-2 w-full rounded" type="password" name="password" required>
                    @error('password')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="py-2">
                    <button class="w-full px-8 py-2 bg-blue-600 rounded-lg text-white" type="submit">{{ __('Login')
                        }}</button>
                </div>
            </form>
            <p>
                Don't have an account? <a href="/create">Register</a>
            </p>
        </div>
    </div>

</body>

</html>