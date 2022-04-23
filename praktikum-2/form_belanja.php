<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<header>Belanja Online</header><br><br>

<div class="bungkus">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
        <form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="text1" class="col-2 col-form-label">Customer</label> 
    <div class="col-4">
      <input id="text1" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="masin cuci"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="text" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-3">
      <input id="text" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button name="proses" type="submit" class="btn btn-secondary">Submit</button>
    </div>
  </div>
</form>
		</div>
		<div class="col-md-4">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Daftar Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>TV: 4.200.000</td>
    </tr>
    <tr>
      <td>Kulkas: 3.100.000</td>
    </tr>
    <tr>
      <td>Mesin Cuci: 3.800.000</td>
    </tr>
  </tbody>
  <thead>
    <tr>
      <th scope="col">Harga Dapat Berubah Sewaktu-waktu</th>
    </tr>
  </thead>
</table>
		</div>
	</div>
</div>
</div>
<!-- <footer>Develop by @zainrizqulloh. Copyright 2022</footer>  -->

<?php
error_reporting(0);
  $proses = $_POST['proses'];
  $produk = $_POST['produk'];
  $jumlah = $_POST['jumlah'];
  $customer = $_POST['customer'];

  echo '<br/><b>Pembayaran</b> <br/> ' .$proses;
  echo '<br/>Nama Customer: ' .$customer;
  echo '<br/>Produk Pilihan: ' .$produk;
  echo '<br/>Jumlah Beli: ' .$jumlah;

  if ($produk == "tv") {
    $total_belanja = $jumlah * 4200000;
} elseif ($produk == "kulkas") {
    $total_belanja = $jumlah * 3100000;
} elseif ($produk == "mesin cuci") {
    $total_belanja = $jumlah * 3800000;
}
echo '<br>Total Belanja : Rp. ' . number_format($total_belanja, 0, ',', '.');


  
?>

