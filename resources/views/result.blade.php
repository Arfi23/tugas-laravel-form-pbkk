<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

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
                @if(isset($uploadedFileName))
                    <img src="{{ asset('storage/images/' . $uploadedFileName) }}" alt="Uploaded Image" style="height: 300px; width: 500px;">
                @endif
                <div id="status" class="rounded">{{ $status }}</div>
            </div>
        </div>
    </div>



    <footer class="footer text-white text-center p-4">
      <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
        Created by <a href="https://www.instagram.com/raushanifikra/" target="_blank" class="text-white fw-bold">Arfi Raushani Fikra</a> <i class="bi bi-fire"></i>
      </p>
    </footer>
</body>
</html>