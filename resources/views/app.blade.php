<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap.min.css') }}">
  </head>
  <body>

    <div class="container">
      <div class="card mt-2">
          <div class="card-body">
            <table class="table table-striped table-hovered">
              <tr>
                <td>Nama</td>
                <td>Hobi</td>
                <td>
                  <a class="btn btn-primary">Tambah</a>
                </td>
              </tr>
              @foreach ($teman as $teman_row)
                <tr>
                  <td>{{ $teman_row->nama }}</td>
                  <td>{{ $teman_row->hobi }}</td>
                  <td>
                    <a class="btn btn-warning">Ubah</a>
                    <a class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
              @endforeach
            </table>
          </div>
      </div>
    </div>

    <script src="{{ url('assets/jquery.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap.min.js') }}"></script>
  </body>
</html>
