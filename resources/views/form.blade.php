<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Form</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    <link href="/css/form.css" rel="stylesheet">
</head>
<body>
    <section>
        <div id="formcontainer">
            <div class="col-md-2">
                <h4 class=" fs-1">Form <br> Pendataan</h4>
            </div>
            <div class="col-md-5">
                <form class="ps-4 custom-form" method="POST" action="/form" enctype="multipart/form-data">
                    @csrf
                    <!-- Field Nama -->
                    <div class="form-group">
                        <label for="InputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="input-nama" placeholder="tuliskan nama anda" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- cl Field Nama -->

                    <!-- Field No Telp -->
                    <div class="form-group mt-1">
                        <label for="InputNoTelp" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" id="input-notelp" placeholder="masukkan nomor telepon anda" name="notelp" value="{{ old('notelp') }}">
                        @error('notelp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- cl Field No Telp-->

                    <!-- Field Email -->
                    <div class="form-group mt-1">
                        <label for="InputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="input-email" placeholder="masukkan email anda" name="email" value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- cl Field Email -->

                    <!-- Field Password -->
                    <div class="form-group mt-1">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="input-password" placeholder="masukkan password anda" name="password" value="{{ old('password') }}">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- cl Field Password -->

                    <!-- Field Pekerjaan -->
                    <div class="form-group mt-1">
                        <label for="InputPekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="input-pekerjaan" placeholder="pekerjaan anda" name="pekerjaan"  value="{{ old('pekerjaan') }}">
                        @error('pekerjaan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- cl Field Pekerjaan -->

                    <!-- Field Institusi -->
                    <div class="form-group mt-1">
                        <label for="InputInstitusi" class="form-label">Institusi</label>
                        <input type="text" class="form-control" id="input-institusi" placeholder="institusi tempat anda bekerja" name="institusi"  value="{{ old('institusi') }}">
                        @error('institusi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- cl Field Institusi -->

                    <!-- Field Double -->
                    <div class="form-group mt-1">
                        <label for="InputDouble" class="form-label">Bilangan antara 2.50 s.d. 99.99</label>
                        <input type="text" step="0.1" class="form-control" id="input-double" placeholder="masukkan bilangan" name="double" value="{{ old('double') }}">
                        @error('double')  
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- cl Field Double -->

                    <!-- Field Image -->
                    <div class="form-group mt-1">
                        <label for="image">Unggah gambar</label>
                        <input type="file" class="form-control mt-2" id="input-image" name="image" accept="image/*">
                        @error('image')
                            <div class="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- cl Field Image -->

                    <button id="button1" type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>    
        </div>
    </section>
    
    <footer class="footer text-white text-center p-5">
      <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
        Created by <a href="https://www.instagram.com/raushanifikra/" target="_blank" class="text-white fw-bold">Arfi Raushani Fikra</a> <i class="bi bi-fire"></i>
      </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>