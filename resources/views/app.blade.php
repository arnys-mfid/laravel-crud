<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap.min.css') }}">
  </head>
  <body>

    <div class="container pt-5">

      @if (count($errors))
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li class="m-0 p-0">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      @if ($msg = Session::get('success'))
        <div class="alert alert-success">
          {{ $msg }}
        </div>
      @endif

      <div class="row">
        
        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Form Teman</div>
            <div class="card-body">
              <form action="{{ route('teman.store') }}" method="post">
                @csrf

                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" class="form-control" name="nama">
                </div>

                <div class="form-group">
                  <label for="">Hobi</label>
                  <input type="text" class="form-control" name="hobi">
                </div>

                <button class="btn btn-primary">Simpan</button>

              </form>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Data Teman</div>
            <div class="card-body">
              <table class="table table-striped table-hovered">
                <tr>
                  <td>Nama</td>
                  <td>Hobi</td>
                  <td>Aksi</td>
                </tr>
                @foreach ($teman as $teman_row)
                  <tr>
                    <td>{{ $teman_row->nama }}</td>
                    <td>{{ $teman_row->hobi }}</td>
                    <td>
                      <form action="{{ route('teman.destroy', $teman_row->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                          <button class="btn btn-danger" type="submit" >Hapus</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ url('assets/jquery.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap.min.js') }}"></script>
  </body>
</html>
