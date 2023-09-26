<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link href="/css/result.css" rel="stylesheet">
</head>
<body>
    <div id="res-con">
        <div class="row">
            <div class="col-md-4">
                <div class="output">Nama: {{ $results['nama'] }}</div>
                <div class="output">Nomor Telepon: {{ $results['notelp'] }}</div>
                <div class="output">Email: {{ $results['email'] }}</div>
                <div class="output">Password: {{ $results['password'] }}</div>
                <div class="output">Pekerjaan: {{ $results['pekerjaan'] }}</div>
                <div class="output">Institusi: {{ $results['institusi'] }}</div>
                <div class="output">Bilangan: {{ $results['double'] }}</div>
                <img src="{{ asset('storage/images/'.$results['image']) }}" style="height: 300px;width: 500px;">
                <div id="status">{{ $status }}</div>
            </div>
        </div>
    </div>
</body>
</html>