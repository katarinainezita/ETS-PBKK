<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf 
        @method('put')
        <div>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama" value="{{$product->nama}}" />
        </div>
        <div>
            <label>Jenis</label>
            <select name="jenis" placeholder="{{$product->jenis}}" value="{{$product->jenis}}">
                <option value="meja">Meja</option>
                <option value="kursi">Kursi</option>
                <option value="laptop">Laptop</option>
                <option value="printer">Printer</option>
                <option value="kabel">Kabel</option>
            </select>
        </div>
        <div>
            <label>Kondisi</label>
            <select name="kondisi" placeholder="{{$product->kondisi}}" value="{{$product->kondisi}}">
                <option value="baik">Baik</option>
                <option value="layak">Layak</option>
                <option value="rusak">Rusak</option>
            </select>
        </div>
        <div>
            <label>Keterangan</label>
            <textarea style="height:150px" name="keterangan" placeholder="{{$product->keterangan}}" value="{{$product->keterangan}}"></textarea>
        </div>
        <div>
            <label>Kecacatan</label>
            <textarea style="height:150px" name="kecacatan" placeholder="{{$product->kecacatan}}" value="{{$product->kecacatan}}"></textarea>
        </div>
        <div>
            <label>Jumlah</label>
            <input type="text" name="jumlah" placeholder="Jumlah" value="{{$product->jumlah}}"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>