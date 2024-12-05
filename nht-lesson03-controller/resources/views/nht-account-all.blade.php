<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nht - Danh sách tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="container my-3">
        <h1>Nht - Danh sánh tài khoản</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>FullName</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0
                @endphp
                @foreach ($model as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item["nht_id"]}}</td>
                        <td>{{$item["nht_userName"]}}</td>
                        <td>{{$item["nht_password"]}}</td>
                        <td>{{$item["nht_fullName"]}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>