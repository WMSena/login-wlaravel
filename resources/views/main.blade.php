<!DOCTYPE html>
<html>
<head>
	<title>LATIHAN</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/config.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
</head>
<body>
	<!--- HEADER START -->
		<header>
			
				<div class="head-top">
					<p class="font1 toright">Welcome to Altmetric.</p>
						<div class="log-wrap toleft">
							<a href="#" id="myBtn"> LOGIN</a>
							<a href="#"> REGISTER</a> 
						</div>
				</div>
<!--- POPUP LOGIN START -->
<form action="#login" method="post">	 
	 <div class="popup" id="myPopup">
		 <div id="box">
			 <a class="close pull-right" style="cursor: pointer;">X</a>
			<div class="container">
				<div class="box">
					
					<div class="container-form">
						<span class="fa fa-envelope-o"></span>
							<input type="text" name="user_login" placeholder="Email...">
					</div>

					<div class="container-form">
						<span class="fa fa-lock"></span>
							<input type="password" name="password_login" placeholder="Password...">
					</div>

					<div class="container-form">
						<input type="submit" name="submit" value="Login">
						<input type="reset" name="reset" value="Reset">
					</div>
				</div>
			</div>
	 	  </div> 
	 </div>
</form>
<!--- POPUP LOGIN END -->
<script>

var modal = document.getElementById('myPopup');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
 
btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>










				<div class="head-bottom">
					<ul class="nav">
						<li><a href="#">HOME</a></li>
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">CONTACT</a></li>
						<li><a href="#">SITEMAP</a></li>
						<li><div class="lil-bar"></div></li>
						<li>
							<div class="dropdown">
								<button class="btndrop2">
									<i class="fa fa-shopping-cart badge-notif" data-badge="2"></i>
								</button>
									<div class="dropdown-content">
										<a href="#">Kategori</a>
									    <a href="#">Kategori</a>
									    <a href="#">Kategori</a>
									</div>		
							</div>
						</li>
					</ul> 
						<a href="index.html"><img src="images/logo.png" width="300"></a>
				
				</div>
		</header>
	<!--- HEADER END -->

		<!--- Content Start -->
<div class="wrapper">
		<form action="#" enctype="">
				<div class="one-four">
					<input type="text" name="search" placeholder="Cari..."><i class="fa fa-search"></i>
				</div>
				<div class="one-four">
					<select>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
					</select>
				</div>
				<div class="one-four">
					<select>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
					</select>
				</div>
				<div class="one-four">
					<select>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
						<option>Pilih Kategori</option>
					</select>


				</div>
				<button class="search-icon"><i class="fa fa-search"></i></button>
		</form>

	<div class="clearfix"></div>
<div class="container">
			<div class="left-side">
					<div class="top-cate">Categories</div>
							<ul class="category">
								<li><a href="#">Kategori</a></li>
								<li><a href="#">Kategori</a></li>
								<li><a href="#">Kategori</a></li>
								<li><a href="#">Kategori</a></li>
								<li><a href="#">Kategori</a></li>	
							</ul>
			</div>

		<div class="sidebar">
			<img src="images/banner/2-min.jpg" width="100%" class="mySlides">
			<img src="images/banner/3-min.jpg" width="100%" class="mySlides">
			<img src="images/banner/4-min.jpg" width="100%" class="mySlides">
			
		</div>
			<script>
				var myIndex = 0;
				carousel();

				function carousel() {
				    var i;
				    var x = document.getElementsByClassName("mySlides");
				    for (i = 0; i < x.length; i++) {
				       x[i].style.display = "none";  
				    }
				    myIndex++;
				    if (myIndex > x.length) {myIndex = 1}    
				    x[myIndex-1].style.display = "block";  
				    setTimeout(carousel, 2000); // Change image every 2 seconds
				}
				
			</script>
</div>
		
		<div class="clearfix"></div>

            <!-- ITEM START -->
			<div class="item-wrap">
				<p class="item-title">News Item</p>
					<div class="four-item">
						<img src="{{ asset('images/items/898Acer_Aspire_AZC_602-AiO-PCa-120x120.jpg') }}" width="90%" style="border: 1px #e0e0e0 solid;">
						<p class="item-name">LAPTOP</p>
						<p class="item-price">Rp. 200.000</p>
						<a href="#"><div class="item-button">Beli Sekarang</div></a>
                    </div>
                    <div class="four-item">
						<img src="{{ asset('images/items/898Acer_Aspire_AZC_602-AiO-PCa-120x120.jpg') }}#" width="90%" style="border: 1px #e0e0e0 solid;">
						<p class="item-name">LAPTOP</p>
						<p class="item-price">Rp. 200.000</p>
						<a href="#"><div class="item-button">Beli Sekarang</div></a>
                    </div>
                    <div class="four-item">
						<img src="{{ asset('images/items/898Acer_Aspire_AZC_602-AiO-PCa-120x120.jpg') }}" width="90%" style="border: 1px #e0e0e0 solid;">
						<p class="item-name">LAPTOP</p>
						<p class="item-price">Rp. 200.000</p>
						<a href="#"><div class="item-button">Beli Sekarang</div></a>
                    </div>
                    <div class="four-item">
						<img src="{{ asset('images/items/898Acer_Aspire_AZC_602-AiO-PCa-120x120.jpg') }}" width="90%" style="border: 1px #e0e0e0 solid;">
						<p class="item-name">LAPTOP</p>
						<p class="item-price">Rp. 200.000</p>
						<a href="#"><div class="item-button">Beli Sekarang</div></a>
					</div>

            </div>

			<!-- ITEM END -->

			<!-- ITEM(Best Seller) START -->
			
				
                <div class="item-wrap">
				<p class="item-title">Best Seller</p>
					<div class="four-item">
						<img src="{{ asset('images/items/898Acer_Aspire_AZC_602-AiO-PCa-120x120.jpg') }}" width="90%" style="border: 1px #e0e0e0 solid;">
						<p class="item-name">LAPTOP</p>
						<p class="item-price">Rp. 200.000</p>
						<a href="#"><div class="item-button">Beli Sekarang</div></a>
                    </div>
                    <div class="four-item">
						<img src="{{ asset('images/items/898Acer_Aspire_AZC_602-AiO-PCa-120x120.jpg') }}" width="90%" style="border: 1px #e0e0e0 solid;">
						<p class="item-name">LAPTOP</p>
						<p class="item-price">Rp. 200.000</p>
						<a href="#"><div class="item-button">Beli Sekarang</div></a>
                    </div>
                    <div class="four-item">
						<img src="{{ asset('images/items/898Acer_Aspire_AZC_602-AiO-PCa-120x120.jpg') }}" width="90%" style="border: 1px #e0e0e0 solid;">
						<p class="item-name">LAPTOP</p>
						<p class="item-price">Rp. 200.000</p>
						<a href="#"><div class="item-button">Beli Sekarang</div></a>
                    </div>
                    <div class="four-item">
						<img src="{{ asset('images/items/898Acer_Aspire_AZC_602-AiO-PCa-120x120.jpg') }}" width="90%" style="border: 1px #e0e0e0 solid;">
						<p class="item-name">LAPTOP</p>
						<p class="item-price">Rp. 200.000</p>
						<a href="#"><div class="item-button">Beli Sekarang</div></a>
					</div>

            </div>
			<!-- ITEM END -->

</div>
<!--- Content End -->
<footer>
	<div class="one-half">
		<div class="title-list">CATEGORIES</div>
				<ul class="footer-cate">
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>	
				</ul>
	</div>

	<div class="one-half">
		<div class="title-list">CATEGORIES</div>
				<ul class="footer-cate">
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>
					<li><a href="#">Kategori</a></li>	
				</ul>
	</div>

	<div class="image-footer-wrap">
		<a href="index.html"><img src="images/logo-footer.png" width="80%"></a>
	</div>

	<div class="service-wrap">
		<p class="service"> Costumer Service 7x24 hour<br>(021) 5000 2017</p>

	</div>
</footer>
<footer class="sec-footer"> Copyright&copy; Rifky</footer>	

	




</body>
</html>