<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Log Servis</title>
        <link rel="stylesheet" href="{{ url('assets/bootstrap.min.css') }}">
	</head>
    
	<body>
        <div class="container">
            <div class="card mt-2">
                <div class="card-body">
                    <div class="card-header">
                        <a href="/"> <- Kembali </a>
                    </div>
                    <br/>
                    <form action="" method="post">
                        <table cellpadding=3>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" maxlength="25" class="form-control" value="{{ old('nama') }}">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Hobi</td>
                                <td>
                                    <div class="col-sm-10">
                                        <input type="text" name="barang" maxlength="25" class="form-control" value="{{ old('barang') }}"></td>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="col-sm">
                                        <input class="btn btn-md btn-success" type="submit" value="Simpan">
                                    </div>
                                </td>	
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
	</body>
</html>
