<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Toko Material</h2>

    Masukan Pesanan : <strong>{{$material}}</strong>

    @if($material == 'Pasir urug')
    <br>Harga {{$material}} Rp.50000
    @elseif($material == 'Batako besar')
    <br>Harga {{$material}} Rp.30000
    @elseif($material == 'Bata merah')
    <br>Harga {{$material}} Rp.40000
    @elseif($material == 'Batu apung')
    <br>Harga {{$material}} Rp.65000
    @else($material)
    <br>Harga : List harga tidak ada
    @endif

    <br>
    <br>
    <hr>

    Masukan Pesanan : <strong>{{$material1}}</strong>

    @if($material1 == 'Pasir urug')
    <br>Harga {{$material1}} Rp.50000
    @elseif($material1 == 'Batako besar')
    <br>Harga {{$material1}} Rp.30000
    @elseif($material1 == 'Bata merah')
    <br>Harga {{$material1}} Rp.40000
    @elseif($material1 == 'Batu apung')
    <br>Harga {{$material1}} Rp.65000
    @else($material1)
    <br>Harga : List harga tidak ada
    @endif


</body>
</html>