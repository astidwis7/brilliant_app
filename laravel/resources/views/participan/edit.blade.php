<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"
          >
    <title>Edit Profil
    </title>
  </head>
  <style>
    body {background-color: #C0C1CF;}
  </style>
  <body>
    <div class="container pt-4 bg-white">
      <div class="row">
        <div class="col-md-8 col-xl-6">
          <h1>Edit Profil
          </h1>
          <hr>
          <form action="{{ route('participan.update',['participan' => $participan->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="username">Username
                </label>
                <input type="text"
                       class="form-control @error('username') is-invalid @enderror"
                       id="username" name="username" value="{{ old('username') ?? $participan->username }}">
                @error('username')
                <div class="text-danger">{{ $message }}
                </div>
                @enderror
              </div>
            <div class="form-group">
                <label for="password">Password
                </label>
                <input type="text"
                       class="form-control @error('password') is-invalid @enderror"
                       id="password" name="password" value="{{ old('password') ?? $participan->password }}">
                @error('password')
                <div class="text-danger">{{ $message }}
                </div>
                @enderror
              </div>
            <div class="form-group">
              <label for="name">Nama Lengkap
              </label>
              <input type="text"
                     class="form-control @error('name') is-invalid @enderror"
                     id="name" name="name" value="{{ old('name') ?? $participan->name }}">
              @error('name')
              <div class="text-danger">{{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label>Jenis Kelamin
              </label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki" value="L" {{ (old('gender') ?? $participan->gender)== 'L' ? 'checked': '' }} >
                  <label class="form-check-label" for="laki_laki">Laki-laki
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" {{ (old('gender') ?? $participan->gender)== 'P' ? 'checked': '' }} >
                  <label class="form-check-label" for="perempuan">Perempuan
                  </label>
                </div>
                @error('gender')
                <div class="text-danger">{{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat
              </label>
              <textarea class="form-control" id="alamat" rows="3" name="alamat">{{ old('alamat') ?? $participan->address}}
              </textarea>
            </div>
            <div class="form-group">
                <label for="image">Gambar Profile</label>
                <br><img height="150px" src="{{url('')}}/{{$participan->image}}" class="rounded" alt="">
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
            <button type="submit" class="btn btn-primary mb-2">Update
            </button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
