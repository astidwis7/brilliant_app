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
                @if(session()->has('pesan'))
                <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                </div>
                @endif
            </div>
        </div>
    </div>
  </body>
</html>