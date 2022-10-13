<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AGENCY</title>

	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<style type="text/css">
		@media only screen and (min-width: 900px) {
		  .helim{
		  	height: 600px;
		  }
		}
		.form{
			position: absolute;
		    right: 35%;
		    left: 35%;
		    bottom: 35%;
		}
		.gray{
			color:gray;
		}
		.green{
			color:green;
		}
		.bg-gray{
			background-color: rgb(241, 243, 242);
		}
		.navftsz{

				font-size:300%;
			}
		.owl-nav{
			color:hsl(0, 0%, 100%);
		}
		.owl-prev{
			text-align: center;
			position:absolute;
		    left: 0;
		    bottom: 44%;
		}
		.owl-next{
			text-align: center;
			position:absolute;
		    right: 0;
		    bottom: 44%;
		}
		.owl-dots{
		    position: absolute;
		    right: 20%;
		    left: 20%;
		    bottom: 2%;
		}
		.big{
			font-size: 25px;
		}
		.star{
			width: 100px;
			height: 100px;
			object-position: 100% 100%;
		}
		.cimg {
			position: relative;
		  	z-index: -1;
		}
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: center;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
</style>

</head>

<body>
	<nav class="navbar navbar-expand-lg" style="color: white;">
	  <div class="container-fluid ">
	  	<a class="navbar-brand" href="companyLandingPage.html">
	      <img src="cname.jpg" alt="AGENCY" width="200" height="50">
	    </a>
	    <button class="navbar-toggler big" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="border: none;">Menu
	    </button>
	    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
	    	<div class="offcanvas-header">
	        	<button type="button" class="btn-close right" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	      	</div>
      		<ul class="navbar-nav justify-content-end big">
				<li class="nav-item">
			  		<a class="nav-link gray" href="#" style=";">WHY US</a>
				</li>
				<li class="nav-item">
			  		<a class="nav-link gray" href="#">ABOUT</a>
				</li>
				<li class="nav-item">
			  		<a class="nav-link gray" href="#">SERVICES</a>
				</li>
				<li class="nav-item">
			  		<a class="nav-link gray" href="#">CONTACT US</a>
				</li>
			</ul>
	    </div>
	  </div>
	</nav>


	<div class="container" style="text-align: center;">
		<h1>Thankyou for visiting</h1>

		<table>
			<tr>
				<td>Name:</td>
				<td><?php echo $_GET["name"]; ?></td>
			</tr>
			<tr>
				<td>Contact:</td>
				<td><?php echo $_GET["cont"]; ?></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><?php echo $_GET["email"]; ?></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><?php echo $_GET["age"]; ?></td>
			</tr>
			<tr>
				<td>Date of Performance:</td>
				<td><?php echo $_GET["date"]; ?></td>
			</tr>
		</table>
	</div>

	<footer>
	  	<!--dropbox for language-->
	  	<div class="container-fluid bg-gray" style="height: 100px;">
			<div>
				<br>
			  	<div class="dropdown">
			  		<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" value="English" aria-expanded="false">
					    Language
					</button>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">English</a></li>
						<li><a class="dropdown-item" href="#">Hindi</a></li>
						<li><a class="dropdown-item" href="#">Marathi</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

  	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script type="text/javascript">
		$("#button1").click(function() {
		    $('html, body').animate({
		        scrollTop: $("#myDiv").offset().top
		    }, 100);
		});
		$("#button2").click(function() {
		    $('html, body').animate({
		        scrollTop: $("#myDiv").offset().top
		    }, 100);
		});
		$("#button3").click(function() {
		    $('html, body').animate({
		        scrollTop: $("#myDiv").offset().top
		    }, 100);
		});
		$('.owl-carousel').owlCarousel(
		{
			items : 1,
		    loop:true,
		    margin:0,
		    nav:true,
		    autoHeight:true,
		    navText : ['<h1 class="navftsz"><</h1>','<h1 class="navftsz">></h1>'],
		});
		jQuery.validator.setDefaults({
			debug: true,
			success: "valid"
		});
		$( "#myform" ).validate({
			rules: {
				name: {
					required: true,
				},
				cont: {
					required: true,
					minlength: 10,
					maxlength: 10,
				},
				email: {
					required: true,
				},
				age: {
					required: true,
					min: 18,
				},
				date: {
					required: true,
					maxDate: true,
				}
			}
		});
		$.validator.addMethod("maxDate", function(value, element) {
			var curDate = new Date();
			console.log(Date.parse(curDate));
		    var inputDate = new Date(value);
		    console.log(Date.parse(inputDate));
		    console.log(inputDate - curDate);
		    console.log(172,800);
		    if ((inputDate - curDate) < 172800000)
				return true;
			return false;
		}, "Invalid Date!");

	</script>

</body>

</html>