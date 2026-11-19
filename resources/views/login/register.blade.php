
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register | Data-Con's</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

    <div class="auth-container">

        <div class="auth-card">

            <div class="logo">
                <div class="logo-icon">D</div>
                <h1>Data-Con's</h1>
                <p>Computer Accessories Store</p>
            </div>

            <div class="auth-heading">
                <h2>Create Account</h2>
                <p>Register to access your dashboard.</p>
            </div>

            @if($errors->any())
                <div class="alert error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('register.submit') }}" method="POST" id="registerForm">
                @csrf

                <div class="form-group">
                    <label>Full Name</label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter your full name"
                        autocomplete="name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Email Address</label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        autocomplete="email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Create a password (minimum 8 characters)"
                        minlength="8"
                        autocomplete="new-password"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Confirm your password"
                        minlength="8"
                        autocomplete="new-password"
                        required
                    >
                </div>

                <button type="submit" class="auth-button" id="registerButton">
                    Create Account
                </button>

            </form>

            <div class="auth-footer">
                Already have an account?
                <a href="{{ route('login') }}">Sign in</a>
            </div>

        </div>

        <p class="copyright">
            &copy; {{ date('Y') }} Data-Con's. All rights reserved.
        </p>

    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function () {
            const button = document.getElementById('registerButton');

            button.disabled = true;
            button.textContent = 'Creating Account...';
            button.style.opacity = '0.7';
            button.style.cursor = 'not-allowed';
        });
    </script>

</body>
</html>
