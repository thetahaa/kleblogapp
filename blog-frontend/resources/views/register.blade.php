<html>
    <head>
        <title>kle | Kayıt Ol</title>
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
                    <form action="{{ route('register') }}" method="POST" id="form">
                        @csrf
                        <h3 id="register">Kayıt Ol</h3>
                        <input type="text" class="name" name="name" placeholder="İsim Soyisim" required style="margin-top: 30px;">
                        <input type="email" class="email" name="email" placeholder="E-Mail" required>
                        <div class="input-group">
                            <input type="password" class="form-control pass" id="password" name="password" placeholder="Şifre" required>
                                <span id="toggle-password">
                                    <i class="fa fa-eye-slash goz"></i>
                                </span>
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control againpass" id="password_confirmation" name="password_confirmation" placeholder="Şifre Tekrarı" required>
                                <span id="toggle-password-confirmation">
                                    <i class="fa fa-eye-slash goz"></i>
                                </span>
                        </div>

                        @if ($errors->any())
                        <div id="warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <p>Zaten bir hesabın varsa <a href="{{ url('/login') }}">Giriş Yap</a></p>
                        <button type="submit" class="btn" id="button">Kayıt Ol</button>
                    </form>
                </div>
            </div>

        </div>


        <script>
            
            // Şifre için göz simgesine tıklama işlemi
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

            // Şifre tekrarına göz simgesi eklemek için
            document.getElementById('toggle-password-confirmation').addEventListener('click', function() {
                var passwordConfirmationField = document.getElementById('password_confirmation');
                var icon = this.querySelector('i');
                
                if (passwordConfirmationField.type === "password") {
                    passwordConfirmationField.type = "text";
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                } else {
                    passwordConfirmationField.type = "password";
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
            });


        </script>

    </body>
</html>