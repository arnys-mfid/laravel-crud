<!DOCTYPE html>
<html>
	<head>
		<title>Ubah Hobi</title>
        <link rel="stylesheet" href="{{ url('assets/bootstrap.min.css') }}">
	</head>

	<body>
        <div class="container">
            <card class="card mt-2">
                <div class="card-body">
                    <div class="card-header">
                        <a href="/"> <- Kembali </a>
                    </div>
                    <br/>

                    <fieldset>
                        <form action="" method="post"> 
                            {{ csrf_field() }}
                            
                            <input type="hidden" name="id" maxlength="25" class="form-control" required="required" value="">
                            
                            <table cellpadding=3>
                                <tr>
                                    <td>Nama</td>
                                    <td>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" maxlength="25" class="form-control" required="required" value="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hobi</td>
                                    <td>
                                        <div class="col-sm-10">
                                            <input type="text" name="hobi" maxlength="25" class="form-control" required="required" value=""></td>
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
                    </fieldset>
                </div>
            </div>
        </div>
	</body>
</html>
