<html>
    <head>
        <title>kle | Anasayfa</title>
        <meta charset="UFT-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>

    <body>
    
        <div class="container-fluid">

        <div id="form-control">
                <div class="form-container">
                    <form id="form">
                        <h3 id="warning">Verileri Görmek İçin En Az Bir Hesapla Giriş Yapın</h3>
                        <p id="warning1">Eğer bir hesabın yoksa Kayıt Olun</p>
                        <div id="button-control">
                            <a href="{{ url('/register') }}"><button type="button" class="btn" id="register">Kayıt Ol</button></a>
                            <a href="{{ url('/login') }}"><button type="button" class="btn" id="login">Giriş Yap</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>
