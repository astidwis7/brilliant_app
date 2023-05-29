<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Biodata {{$participan->name}}
    </title>
  </head>
  <body>
    <div class="container mt-3">
      <div class="row">
        <div class="col-12">
          <!-- <div class="pt-3 d-flex justify-content-end align-items-center"> -->
            <h1 class="h2 mr-auto">Biodata {{$participan->name}}
            </h1>
            
          <!-- </div> -->
          <div class="col-12">
          <div class="pt-3 d-flex justify-content-end align-items-center">
            
            <a href="{{ route('participan.edit',['participan' => $participan->id]) }}"
               class="btn btn-primary">Edit
            </a>
            <form action="{{ route('participan.destroy',['participan'=>$participan->id]) }}"
                  method="POST">
              @method('DELETE')
              @csrf
              <button type="submit" class="btn btn-danger ml-3">Hapus
              </button>
            </form>
          </div>
          <hr>
          @if(session()->has('pesan'))
          <div class="alert alert-success">
            {{ session()->get('pesan') }}
          </div>
          @endif
          <ul>
            <li>Username: {{$participan->username}}
            </li>
            <li>Password: {{$participan->password}}
            </li>
            <li>Nama: {{$participan->name}}
            </li>
            <li>Jenis Kelamin:
              {{$participan->gender == 'P' ? 'Perempuan' : 'Laki-laki'}}
            </li>
            <li>Alamat:
              {{$participan->address == '' ? 'N/A' : $participan->address}}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
