
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Data-Con's</title>

    
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>

    <div class="auth-container">

        <div class="auth-card">

            <div class="logo">
                <div class="logo-icon">G</div>
                <h1>GIZZAM</h1>
                <p>Computer Accessories Store</p>
            </div>

            <div class="auth-heading">
                <h2>Welcome Back!</h2>
                <p>Sign in to access your dashboard.</p>
            </div>

            @if(session('success'))
                <div class="alert success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('login.submit') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Email Address</label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        autocomplete="username"
                        required
                        autofocus
                    >
                </div>

                <div class="form-group">
                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        required
                    >
                </div>

                <button type="submit" class="auth-button">
                    Sign In
                </button>

            </form>

            <div class="auth-footer">
                Don't have an account?
                <a href="{{ route('register') }}">Create an account</a>
            </div>

        </div>

        <p class="copyright">
            &copy; {{ date('Y') }} Data-Con's. All rights reserved.
        </p>

    </div>

</body>
</html>
