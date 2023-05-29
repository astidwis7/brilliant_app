<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mahasiswa
    </title>
  </head>
  <body>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <div class="py-4 d-flex justify-content-end align-items-center">
            <h2 class="mr-auto">Tabel Mahasiswa
            </h2>
            <a href="{{ route('participan.create') }}" class="btn btn-primary">
              Tambah Mahasiswa
            </a>
          </div>
          @if(session()->has('pesan'))
          <div class="alert alert-success">
            {{ session()->get('pesan') }}
          </div>
          @endif
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#
                </th>
                <th>Foto
                </th>
                <th>Username
                </th>
                <th>Password
                </th>
                <th>Nama
                </th>
                <th>Jenis Kelamin
                </th>
                <th>Alamat
                </th>
              </tr>
            </thead>
            <tbody>
              @forelse ($participans as $pelajar)
              <tr>
                <th>{{$loop->iteration}}
                </th>
                <td><img height="30px" src="{{url('')}}/{{$pelajar->image}}" class="rounded" alt=""></td>
                <td><a href="{{ route('participan.show',['participan' => $pelajar->id]) }}">{{$pelajar->username}}</a></td>
                <td>{{$pelajar->password}}
                </td>
                <td>{{$pelajar->name}}
                </td>
                <td>{{$pelajar->gender == 'P'?'Perempuan':'Laki-laki'}}
                </td>
                <td>{{$pelajar->address == '' ? 'N/A' : $pelajar->address}}
                </td>
              </tr>
              @empty
              <td colspan="6" class="text-center">Tidak ada data...
              </td>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
