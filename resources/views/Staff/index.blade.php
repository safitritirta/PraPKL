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
            StaffBranch
        </legend>
        <br>
        <table border="1">
            <tr>
                <td>staffNo</td>
                <td>sName</td>
                <td>position</td>
                <td>salary</td>
                <td>branchNo</td>
            </tr>
            @foreach ($SB as $data)
            <tr>
                <td>{{$data['staffNo']}}</td>
                <td>{{$data['sName']}}</td>
                <td>{{$data['position']}}</td>
                <td>{{$data['salary']}}</td>
                <td>{{$data['branchNo']}}</td>
            </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>