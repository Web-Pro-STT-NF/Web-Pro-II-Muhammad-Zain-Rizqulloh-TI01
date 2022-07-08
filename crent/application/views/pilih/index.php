<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Document</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css') ?>">
</head>


<style>
    .product-item{
        padding: 0 100px;
    }

    .down-content{
        float: right;
    }

    img{
        width: 20%;
    }
</style>

<body>
<table class="table table-bordered" style="border-width: 13px;">
  <thead>
    <tr>
      <th scope="col"><h2>Pilih Mobil Anda</h2></th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <td><div class="product-item">
            <img src="<?= base_url() ?>assets/images/product-1-370x270.jpg" alt="">

            <div class="down-content">
              <h4>Large: Premium</h4>

              <h6><small>from</small> $99 <small>per weekend</small></h6>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>

              <small>
                <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;

              </small>


              <a class='lojin' href="<?php echo base_url('index.php/login') ?>">Login to Book</a>
              <span>
                <?php if ($this->session->userdata("ROLE") == "public") { ?>
                  <a href="<?php echo base_url('index.php/mobil/index?id='); ?>" >Book Now</a>
                <?php } ?>
              </span>
            </div>
          </div></td>

    </tr>
    <tr>

      <td><div class="product-item">
            <img src="<?= base_url() ?>assets/images/product-1-370x270.jpg" alt="">

            <div class="down-content">
              <h4>Large: Premium</h4>

              <h6><small>from</small> $99 <small>per weekend</small></h6>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>

              <small>
                <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;

              </small>


              <a class='lojin' href="<?php echo base_url('index.php/login') ?>">Login to Book</a>
              <span>
                <?php if ($this->session->userdata("ROLE") == "public") { ?>
                  <a href="<?php echo base_url('index.php/mobil/index?id='); ?>" >Book Now</a>
                <?php } ?>
              </span>
            </div>
          </div></td>

    </tr>
    <tr>

      <td>jiku</td>

    </tr>
  </tbody>
</table>
</body>
</html>