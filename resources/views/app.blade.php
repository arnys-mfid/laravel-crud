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
            <div class="card-header">
                <a href="/tambah"> + Tambah </a>
            </div>
            <table class="table table-striped table-hovered">
              <tr>
                <td>Nama</td>
                <td>Hobi</td>
                <td>Aksi</td>
              </tr>
              <tr>
                <td>Surya</td>
                <td>Memancing</td>
                <td>
                  <button class="btn btn-warning">Ubah</button>
                  <button class="btn btn-danger">Hapus</button>
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
