<html>
<head>
    <title>kle | Ürünler</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" id="card1">
                    <div class="card-header" id="card2">
                        <h4>Ürün Detayı
                            @if (isset($page))
                                <a href="{{ url()->previous() . '?page=' . $page }}" class="btn btn-danger float-end">Geri</a>
                            @else
                                <a href="{{ url()->previous() }}" class="btn btn-danger float-end">Geri</a>
                            @endif
                        </h4>
                    </div>

                    <div class="card-body" id="card1">
                        <div class="mb-3">
                            <label><b>Ürün Adı</b></label>
                            <p>
                                {{ $product['product_name'] }}
                            </p>
                        </div>
                        <div class="mb-3" id="card1">
                            <label><b>Ürün Fiyatı</b></label>
                            <p>
                                {{ $product['product_price'] }} ₺
                            </p>
                        </div>
                        <div class="mb-3" id="card1">
                            <label><b>Ürün Açıklaması</b></label>
                            <p>
                                {{ $product['description'] }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>