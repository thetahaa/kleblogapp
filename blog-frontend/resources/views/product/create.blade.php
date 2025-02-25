
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
                        <h4>Ürün Oluştur
                            @if (isset($page))
                                <a href="{{ url()->previous() . '?page=' . $page }}" class="btn btn-danger float-end">Geri</a>
                            @else
                                <a href="{{ url()->previous() }}" class="btn btn-danger float-end">Geri</a>
                            @endif
                        </h4>
                    </div>
                    <div class="card-body">
                        <form id="productForm" action="{{ route('product.store') }}" method="POST" onsubmit="disableButton(this)">
                            @csrf

                            <div class="mb-3" id="card1">
                                <label>Ürün Adı</label>
                                <input type="text" name="product_name" class="form-control" id="card1" />
                                @error('product_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3" id="card1">
                                <label>Ürün Fiyatı</label>
                                <input type="number" name="product_price" class="form-control" id="card1" />
                                @error('product_price') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3" id="card1">
                                <label>Ürün Açıklaması</label>
                                <textarea name="description" rows="3" class="form-control" id="card1"></textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <button id="submitButton" type="submit" class="btn btn-primary">Kaydet</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function disableButton() {
            document.getElementById('submitButton').disabled = true;
            document.getElementById('submitButton').innerText = 'Kaydediliyor...';
        }
    </script>
    
</body>
</html>
