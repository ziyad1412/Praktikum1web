<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
</head>
<body>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 style="text-align:center;">
				BELANJA ONLINE
			</h3>
      <div class="col-12" style="text-align:center;">
                  <ul class="p-1 bg-white" style="list-style-type:none;border:1px solid #c4c4c4;">
                    <li class="bg-secondary p-2 text-white">Daftar Harga</li>
                    <li class="p-2">TV : 4.200.000</li>
                    <li class="p-2 bg-light">KULKAS : 3.100.000</li>
                    <li class="p-2">MESIN CUCI : 3.800.000</li>
                    <li class="bg-secondary p-2 text-white">Harga Dapat Berubah Setiap Saat</li>
                  </ul>
  </div>
  <div class="col-12" >
      <form method="POST" action="hasil_belanja.php">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label"><b>Customer</b></label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4"><b>Pilih Produk</b></label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label"><b>Jumlah Beli</b></label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-secondary">Kirim</button>
    </div>
  </div>
</form>
</div>
		</div>
	</div>
  
</div>




</body>
</html>