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
        <legend>
            Menu
        </legend>

        @foreach ($menu as $menu1)
        <ul type="disc">
            <li>{{$menu1['beranda']}}</li><br>
            <li>{{$menu1['berita']}}</li><br>
            <ul type="square">
                <li>{{$menu1['Olahraga']}}</li>
        @foreach ($menu1['olahraga'] as $olahraga1)
            <ul>
                <li>{{$olahraga1}}</li>
            </ul>
        @endforeach
            </ul>
        @foreach ($menu1['Berita'] as $berita)
        <ul type="square">
            <li>{{$berita}}</li>
        </ul>
        @endforeach
            <li>{{$menu1['tentang']}}</li><br>
        </ul>
        @endforeach
    </fieldset>
</body>
</html>