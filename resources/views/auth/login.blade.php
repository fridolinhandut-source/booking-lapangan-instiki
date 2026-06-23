<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HoopBook</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f5c4e 0%, #1a8a6e 50%, #0d4a3e 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            background: #1db389;
            border-radius: 24px;
            padding: 40px 36px;
            width: 340px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            text-align: center;
        }

        .avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            border: 3px solid rgba(255,255,255,0.5);
            margin: 0 auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.15);
        }

        .avatar svg { width: 36px; height: 36px; stroke: white; fill: none; }

        .input-group {
            position: relative;
            margin-bottom: 14px;
        }

        .input-group svg {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            stroke: rgba(255,255,255,0.7);
            fill: none;
        }

        .input-group input {
            width: 100%;
            padding: 12px 14px 12px 42px;
            border-radius: 50px;
            border: none;
            background: rgba(255,255,255,0.25);
            color: white;
            font-size: 14px;
            outline: none;
        }

        .input-group input::placeholder { color: rgba(255,255,255,0.7); }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 4px 20px;
            font-size: 12px;
            color: rgba(255,255,255,0.8);
        }

        .options label { display: flex; align-items: center; gap: 6px; cursor: pointer; }

        .options a { color: rgba(255,255,255,0.8); text-decoration: none; }
        .options a:hover { color: white; }

        .btn-login {
            width: 100%;
            padding: 12px;
            border-radius: 50px;
            border: none;
            background: white;
            color: #1db389;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }

        .btn-login:hover { background: #f0f0f0; }

        .footer {
            font-size: 12px;
            color: rgba(255,255,255,0.8);
        }

        .footer a {
            color: white;
            font-weight: 600;
            text-decoration: none;
        }

        .error {
            background: rgba(255,0,0,0.2);
            color: white;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 12px;
            margin-bottom: 14px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="avatar">
            <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
        </div>

        @if($errors->any())
            <div class="error">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            </div>

            <div class="input-group">
                <svg viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="options">
                <label>
                    <input type="checkbox" name="remember">
                    Stay signed in
                </label>
                <a href="{{ route('password.request') }}">Forgot password?</a>
            </div>

            <button type="submit" class="btn-login">LOGIN</button>
        </form>

        <div class="footer">
            Not registered yet? <a href="{{ route('register') }}">Create new account</a>
        </div>
    </div>
</body>
</html>