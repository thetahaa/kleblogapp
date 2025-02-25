<html>
<head>
    <title>kle | Giriş Yap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container-fluid">
        <div id="form-control">
            <div class="form-container">
                <form id="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3 id="login">Giriş Yap</h3>
                    <input type="email" class="email" name="email" placeholder="E-Mail" required style="margin-top: 30px;">
                    <div class="input-group">
                        <input type="password" class="form-control pass" id="password" name="password" placeholder="Şifre" required>
                            <span id="toggle-password">
                                <i class="fa fa-eye-slash goz"></i>
                            </span>
                    </div>

                    @if ($errors->has('login'))
                        <div id="warning">
                            {{ $errors->first('login') }}
                        </div>
                    @endif
                    <p>Eğer hesabın yoksa <a href="{{ route('register') }}">Kayıt Ol</a></p>
                    <button type="submit" class="btn" id="button">Giriş Yap</button>
                </form>
            </div>
        </div>
    </div>


    <script>
        document.getElementById('toggle-password').addEventListener('click', function() {
                var passwordField = document.getElementById('password');
                var icon = this.querySelector('i');
                
                if (passwordField.type === "password") {
                    passwordField.type = "text";
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                } else {
                    passwordField.type = "password";
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
            });

    </script>

</body>
</html>
