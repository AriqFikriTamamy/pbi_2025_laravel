<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login-styles.css') }}">
    <!-- Link ke file CSS -->
</head>

<body>
    <div class="container">
        <div class="left-panel">


            <a href="{{ route('home') }}" class="logo">⌘ LOGO</a>

            <div class="left-panel-content">
                <img src="{{ asset('build/assets/images/Login-icon.png') }}" alt="Illustration" class="illustration">

                <blockquote class="quote">
                    “This library has saved me countless hours of work and helped me deliver stunning designs to my
                    clients faster than ever before.”
                    <footer>Sofia Davis</footer>
                </blockquote>
            </div>


        </div>
        <div class="right-panel">
            <div>
                <div class="register-link">
                    <a href="{{ route('register') }}">Register</a>
                </div>
                <div class="login-form">
                    <img src="{{ asset('build/assets/images/Login-icon.png') }}" alt="Illustration"
                        class="mobile-illustration">
                    <div class="logo">LOGIN</div>
                    <p>Fill the form below to login</p>
                    <!-- <form>
                        <input class="placeholder" type="email" placeholder="name@example.com" required>
                        <input class="placeholder" type="password" placeholder="password" required>
                        <button type="submit" class="btn-login" onclick="login()">Login</button>
                    </form> -->

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input class="placeholder" type="email" name="email" placeholder="name@example.com" required>
                        <input class="placeholder" type="password" name="password" placeholder="password" required>
                        <button type="submit" class="btn-login" href="{{ route('dashboard')}}">Login</button>
                        <!-- <p class="or">OR CONTINUE WITH</p>
                    <button class="btn-github"><i class="fab fa-github"></i> Github</button> -->

                        <div class="footer-text">
                            <p>By clicking continue, you agree to our <a href="#">Terms of Service</a> and <a
                                    href="#">Privacy Policy</a>.</p>
                        </div>
                </div>

            </div>

        </div>
    </div>
</body>

</html>