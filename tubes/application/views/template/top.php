

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buih Bersih Laundry</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<!-- css -->
	<link rel="stylesheet" href="<?= base_url('assets/style.css')?>">

	<!-- bootstrap jquery -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
	</script>

	<!-- boxslider -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<!-- Datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

</head>
<div>
	<nav class="navbar navbar-light bg-light">
		<a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/logonav.jpg')?>" class="navbar-brand"
				width="80"></a>
		<form class="form-inline">
			<?php
                if($this->session->has_userdata('username')){
            ?>  
			<a class="nav-link" href="<?= site_url('DataPesanan') ?>">Pesanan</a>

                <a class="mr-3"><?= $this->session->userdata('username')?></a>
                <img src="<?php echo base_url('assets/avatar.webp')?>" class="navbar-brand rounded-circle"
				width="32">
			    <a class="btn btn-outline-primary my-2 my-sm-0" href="<?= site_url('Login/logout') ?>">Logout</a>
			<?php
                }else{         
            ?>
			<a class="nav-link" href="<?php base_url()?>">Home <span class="sr-only"></span></a>

			    <a class="btn btn-outline-primary my-2 my-sm-0" href="<?= site_url('login') ?>">Login</a>
			<?php
                }
            ?>
		</form>
	</nav>