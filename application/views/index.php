<?php
?>

<!doctype html>
<!--
Design by Free Responsive Templates
http://www.free-responsive-templates.com
Released for free under a Creative Commons Attribution 3.0 Unported License (CC BY 3.0)
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sliit Cafeteria Food Ordering System</title>
	<link href="<?php echo base_url("http://fonts.googleapis.com/css?family=Lobster")?>" rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url("http://fonts.googleapis.com/css?family=Belgrano")?>" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css")?>">
	<script src="<?php echo base_url("https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js")?>"></script>
    <script src="<?php echo base_url("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js")?>"></script>
	<link href="<?php echo base_url("assets/bootstrap/css/style.css")?>" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
	<header>
		<div class="logo"><h1><a href="">Corn Food</a></h1></div>
		<nav>
			<ul id="navlist">
				<li id="active"><a href="#">Menu</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</nav>
		<div class="clearfloat"></div>
	</header>

	<table>
         <tr>

        </tr>
         <?php
                  foreach ($products as $row)
                  {
                     ?><tr>
                     <td><?php echo $row->itemId;?></td>
                     <td><?php echo $row->name;?></td>
                     <td><?php echo $row->price;?></td>
                     <td><img src="<?php echo base_url("$row->imageLink;?>")?>"></td>
                     </tr>
                  <?php }
                  ?>
       </table>
	/*
	<div class="bodyContainer">
		<section>
			<div><img src="assets/images/headerPic.jpg" alt=""></div>
		</section>
		<section>
		     <table>
                 <tr>
		          <td><strong>Item Number</strong></td>
                  <td><strong>Name</strong></td>
                  <td><strong>Price</strong></td>
                  <td><strong>Image</strong></td>
                </tr>
			<?php
              foreach ($products as $row)
              {?>
              <tr>
                 <td>

                    <label id="name" name="name"><?php echo $row->name;?></label></td>

                    <td><label id="price" name="price"><?php echo $row->price;?></label></td>
                    <br>
                    <td><a href=""><img src="<?php echo $row->imageLink;?>" alt=""></a></td>
                   <td><button id="buybtn" value="Buy">Buy</button></td></tr>
              <?php }?>

		</section>
	</div>
	*/
	<div class="clearfloat"></div>
	<footer>
		<p>
		</p>
	</footer>
</div>
</body>
</html>
