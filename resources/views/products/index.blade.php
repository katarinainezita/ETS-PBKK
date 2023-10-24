<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    {{-- <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div> --}}

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div>
        <div>
            <a href="{{route('product.create')}}">Create a Product</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Kondisi</th>
                <th>Keterangan</th>
                <th>Kecacatan</th>
                <th>Jumlah</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->nama}}</td>
                    <td>{{$product->jenis}}</td>
                    <td>{{$product->kondisi}}</td>
                    <td>{{$product->keterangan}}</td>
                    <td>{{$product->kecacatan}}</td>
                    <td>{{$product->jumlah}}</td>
                    <td>
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>