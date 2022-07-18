<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Acara TV</legend>
        @foreach ($stasiun as $stasiun1)
            Stasiun TV : {{$stasiun1['nama']}} <br>
            Acara TV : {{$stasiun1['acara']}} <br>
            Jam Tayang : {{$stasiun1['jam']}} <br>
            Tanggal Tayang : {{$stasiun1['tanggal']}} <br>
            <hr>
            @endforeach

    </fieldset>
</body>
</html>