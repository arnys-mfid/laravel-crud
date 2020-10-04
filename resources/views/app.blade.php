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
              <tr>
                <td>Surya</td>
                <td>Memancing</td>
                <td>
                  <a class="btn btn-warning">Ubah</a>
                  <a class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            </table>
          </div>
      </div>
    </div>

    <script src="{{ url('assets/jquery.min.js') }}"></script>
    <script src="{{ url('assets/bootstrap.min.js') }}"></script>
  </body>
</html>
