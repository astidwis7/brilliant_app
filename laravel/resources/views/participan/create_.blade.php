<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register
    </title>
  </head>
  <style>
    /* body {background-color: #ADAEBE;} */
    body {background-color: #C0C1CF;}
  </style>
  <body>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <!-- <div class="py-4 d-flex justify-content-end align-items-center"> -->
          <h2 class="mr-auto">Register</h2>
          <br>
          <!-- </div> -->
          @if(session()->has('pesan'))
          <div class="alert alert-success">
            {{ session()->get('pesan') }}
          </div>
          @endif
          <form action="{{ route('participan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="username">Username
                </label>
                <input type="text"
                       class="form-control @error('username') is-invalid @enderror"
                       id="username" name="username" value="{{ old('username') }}">
                @error('username')
                <div class="text-danger">{{ $message }}
                </div>
                @enderror
              </div>
              <br>
              <div class="form-group">
                <label for="password">Password
                </label>
                <input type="text"
                       class="form-control @error('nama') is-invalid @enderror"
                       id="password" name="password" value="{{ old('password') }}">
                @error('password')
                <div class="text-danger">{{ $message }}
                </div>
                @enderror
              </div>
            <br>
            <div class="form-group">
              <label for="name">Nama Lengkap
              </label>
              <input type="text"
                     class="form-control @error('name') is-invalid @enderror"
                     id="name" name="name" value="{{ old('name') }}">
              @error('name')
              <div class="text-danger">{{ $message }}
              </div>
              @enderror
            </div>
            <br>
            <div class="form-group">
              <label>Jenis Kelamin
              </label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin"
                         id="laki_laki" value="L"
                         {{ old('jenis_kelamin')=='L' ? 'checked': '' }} >
                  <label class="form-check-label" for="laki_laki">Laki-laki
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin"
                         id="perempuan" value="P"
                         {{ old('jenis_kelamin')=='P' ? 'checked': '' }} >
                  <label class="form-check-label" for="perempuan">Perempuan
                  </label>
                </div>
                @error('jenis_kelamin')
                <div class="text-danger">{{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="alamat">Alamat
              </label>
              <textarea class="form-control" id="alamat" rows="3"
                        name="alamat">{{ old('alamat') }}
              </textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="image">Gambar Profile</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
               </div>
            <br>
            <button type="submit" class="btn btn-primary mb-2">Daftar
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
