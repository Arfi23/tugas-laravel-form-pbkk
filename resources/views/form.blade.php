<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div id="formcontainer">
        <div>
            <form method="POST" action="/form" enctype="multipart/form-data">
                @csrf
                <!-- Field Nama -->
                <div class="form-group">
                    <label for="InputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="input-nama" placeholder="tuliskan nama anda" name="nama">
                    @error('input-nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- cl Field Nama -->

                <!-- Field No Telp -->
                <div class="form-group">
                    <label for="InputNoTelp" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control" id="input-notelp" placeholder="masukkan nomor telepon anda" name="notelp">
                    @error('input-notelp')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- cl Field No Telp-->

                <!-- Field Email -->
                <div class="form-group">
                    <label for="InputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="input-email" placeholder="masukkan email anda" name="email">
                    @error('input-email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- cl Field Email -->

                <!-- Field Password -->
                <div class="form-group">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="input-password" placeholder="masukkan password anda" name="password">
                    @error('input-password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- cl Field Password -->

                <!-- Field Pekerjaan -->
                <div class="form-group">
                    <label for="InputPekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="input-pekerjaan" placeholder="pekerjaan anda" name="pekerjaan">
                    @error('input-pekerjaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- cl Field Pekerjaan -->

                <!-- Field Institusi -->
                <div class="form-group">
                    <label for="InputInstitusi" class="form-label">Institusi</label>
                    <input type="text" class="form-control" id="input-institusi" placeholder="institusi tempat anda bekerja" name="institusi">
                    @error('input-institusi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- cl Field Institusi -->

                <!-- Field Double -->
                <div class="form-group">
                    <label for="InputDouble" class="form-label">Bilangan antara 2.50 s.d. 99.99</label>
                    <input type="number" step="0.1" class="form-control" id="input-double" placeholder="masukkan bilangan" name="double">
                    @error('input-double')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- cl Field Double -->

                <div class="form-group">
                    <label for="image">Unggah gambar</label>
                    <input type="file" class="form-control" id="input-image" name="image" accept="image/*">
                    @error('input-image')
                        <div class="alert">{{ $message }}</div>
                    @enderror
                </div>
                <button id="button1" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>