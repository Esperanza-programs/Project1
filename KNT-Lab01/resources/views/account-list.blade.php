<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Account</title>
</head>
<body>
    <h1>List Account</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Fullname</th>
            </tr>
        </thead>
        <tbody>
            @php
                $stt = 0;
            @endphp
            @foreach ($list as $item)
                @php
                    $stt++;
                @endphp
                <tr>
                    <td>{{$stt}}</td>
                    <td>{{$item["username"]}}</td>
                    <td>{{$item["password"]}}</td>
                    <td>{{$item["Fullname"]}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>