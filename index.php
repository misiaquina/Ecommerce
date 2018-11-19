<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<title>Misia Ginting</title>
<link href="csss/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="csss/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="csss/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>			
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop">
						<div class="box">
							<select tabindex="4" class="dropdown drop">
								<option value="" class="label">Dollar :</option>
								<option value="1">Dollar</option>
								<option value="2">Rupiah</option>
							</select>
						</div>
						<div class="box1">
							<select tabindex="4" class="dropdown">
								<option value="" class="label">English :</option>
								<option value="1">English</option>
								<option value="2">Indonesia</option>
								<option value="3">Korea</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 top-header-left">
					<div class="cart box_1">
						<a href="checkout.html">
							 <div class="total">
								<span class="simpleCart_total"></span></div>
								<img src="foto/cart-1.png" alt="" />
						</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="#"><h1>PMO Ring Store❤</h1></a>
        <div class="subtitle">Girls like you</div>

	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="nav navbar-nav"><li class="active"><a href="index.php">HOME</a></li>
						<li><a href="#">ALL PRODUCT</a></li>
						<li><a href="#">LOG IN</a></li>
						<li><a href="#">ABOUT US</a></li>
					</ul>
				</div>
                
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    <!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">HOME</a></li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--bottom-header-->
	<!--banner-starts-->
	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
        
					<img src="foto/1a.jpg" alt=""/>
       
				
			
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
 <!--konten-->
	<section class="konten">
		<div class="container">
			<h1>Most Popular Products</h1>

			<div class="row">

				
				<?php 
				$koneksi= new mysqli("localhost", "root", "", "ecommerce");
				$select="SELECT * FROM ring";
				$hasil=$koneksi->query($select);
				while ($row=$hasil->fetch_assoc()):
					?>

				<div class="col-md-3">
					<div class="thumbnail">
						<img src="foto/<?php echo $row['Foto'];?>" alt="">
						<div class="caption">
							<h3><?php echo $row['Nama'];?></h3>
							<h5>Rp. <?php echo number_format($row['Harga']);?></h5>
							<a href="" class="btn btn-primary">Beli</a>
								<a href="detail.php?id=<?php echo $row['ID'];?>" class="btn btn-default">Detail</a>
                                
						</div>
					</div>
				</div>

			<?php endwhile ?>

			</div>
		</div>
	</section>
	<!--End Konten-->

	<!--Footer-->
	<nav class="navbar navbar-default">
		<div class="container">
			<p> Misia Quina Ginting </br>&copy;2018</p>
			
		</div>
	
	<!--ENd Footer-->


</body>
</html>

=======
<!DOCTYPE html>
<html>
<head>
<title>Misia Quina Ginting</title>
<link href="csss/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src="js/jquery-1.11.0.min.js"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href="csss/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src="js/simpleCart.min.js"> </script>
<link href="csss/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>			
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop">
						<div class="box">
							<select tabindex="4" class="dropdown drop">
								<option value="" class="label">Dollar :</option>
								<option value="1">Dollar</option>
								<option value="2">Rupiah</option>
							</select>
						</div>
						<div class="box1">
							<select tabindex="4" class="dropdown">
								<option value="" class="label">English :</option>
								<option value="1">English</option>
								<option value="2">Indonesia</option>
								<option value="3">Korea</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 top-header-left">
					<div class="cart box_1">
						<a href="checkout.html">
							 <div class="total">
								<span class="simpleCart_total"></span></div>
								<img src="foto/cart-1.png" alt="" />
						</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="#"><h1>PMO Ring Store❤</h1></a>
        <div class="subtitle">Girls like you</div>

	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
				<div class="top-nav">
					<ul class="nav navbar-nav"><li class="active"><a href="">HOME</a></li>
						<li><a href="#">ALL PRODUCT</a></li>
						<li><a href="#">LOG IN</a></li>
						<li><a href="#">ABOUT US</a></li>
					</ul>
				</div>
                
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->
	<!--banner-starts-->
	<div class="bnr" id="home">
		<div  id="top" class="callbacks_container">
        
					<img src="foto/1a.jpg" alt=""/>
       
				
			
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--banner-ends--> 
 <!--konten-->
	<section class="konten">
		<div class="container">
			<h1>Most Popular Products</h1>

			<div class="row">

				
				<?php 
				$koneksi= new mysqli("localhost", "root", "", "ecommerce");
				$select="SELECT * FROM ring";
				$hasil=$koneksi->query($select);
				while ($row=$hasil->fetch_assoc()):
					?>

				<div class="col-md-3">
					<div class="thumbnail">
						<img src="foto/<?php echo $row['Foto'];?>" alt="">
						<div class="caption">
							<h3><?php echo $row['Nama'];?></h3>
							<h5>Rp. <?php echo number_format($row['Harga']);?></h5>
							<a href="" class="btn btn-primary">Beli</a>
								<a href="" class="btn btn-default">Detail</a>




						</div>
					</div>
				</div>

			<?php endwhile ?>

			</div>
		</div>
	</section>
	<!--End Konten-->

	<!--Footer-->
	<nav class="navbar navbar-default">
		<div class="container">
			<p> Misia Quina Ginting </br>&copy;2018</p>
			
		</div>
	
	<!--ENd Footer-->


</body>
</html>

>>>>>>> 04e030936b42239d8c19eef3496d1a1d45ea9897
 