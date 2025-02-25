<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>kle | Ürünler</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @session('status')
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endsession

                <div class="card" id="card1">
                    <div class="card-header" id="card2">
                        <h4>Ürün Listesi
                            {{-- <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger float-end" style="margin-left:5px;">Çıkış Yap</button>
                            </form> --}}

                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger float-end logout" style="margin-left: 10px;">Çıkış Yap</button>
                                <!-- <a href="" class="btn btn-danger float-end logout" style="margin-left: 10px;">Çıkış Yap</a>-->
                                </form>
                            <a href="{{ url('product/create') }}" class="btn btn-primary float-end">Ürün Ekle</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead id="card1">
                                <tr>
                                    <th>ID</th>
                                    <th>Ürün Adı</th>
                                    <th>Ürün Fiyatı</th>
                                    <th>Ürün Açıklaması</th>
                                    <th>Düzenlemeler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($products) > 0)
                                    @foreach ($products as $product)
                                        <tr id="card1">
                                            <td>{{ $product['id'] }}</td>
                                            <td>{{ $product['product_name'] }}</td>
                                            <td>{{ $product['product_price'] }} ₺</td>
                                            <td>
                                                <div class="description" id="desc-{{ $product['id'] }}">
                                                    {{ $product['description'] }}
                                                </div>
                                                <a href="javascript:void(0)" class="read-more" data-id="{{ $product['id'] }}">devamını oku</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('product.edit', $product['id']) }}" class="btn btn-success">Düzenle</a>
                                                <a href="{{ route('product.show', $product['id']) }}" class="btn btn-info">Göster</a>

                                                {{-- <form action="{{ route('product.show', $product['id']) }}" method="GET" class="d-inline">
                                                    <button type="submit" class="btn btn-info">Göster</button>
                                                </form> --}}
                                                
                                                <form action="{{ route('product.destroy', $product['id']) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Sil</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td id="no-product" colspan="5">Ürün bulunmamaktadır. Lütfen Bir Ürün Ekleyiniz.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        <!-- Sayfalama Bağlantılarını Göster -->
                        <div style="display: flex; justify-content: center;">
                            {{ $products->links() }}
                        </div>

                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.description').forEach(desc => {
            const lineHeight = parseFloat(getComputedStyle(desc).lineHeight);
            const maxHeight = lineHeight * 2;

            if (desc.scrollHeight > maxHeight) {
                const readMoreLink = desc.nextElementSibling;
                readMoreLink.style.display = 'inline'; // Bağlantıyı göster
            }
        });

        document.querySelectorAll('.read-more').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const desc = document.getElementById(`desc-${id}`);
                desc.classList.toggle('expanded');

                if (desc.classList.contains('expanded')) {
                    desc.style.maxHeight = 'none'; // Tam yüksekliğe izin ver
                    this.innerText = 'kapat';
                } else {
                    desc.style.maxHeight = ''; // Varsayılan yüksekliğe döner
                    this.innerText = 'devamını oku';
                }
            });
        });

    </script>
    

</body>

</html>