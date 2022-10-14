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
			  		<a class="nav-link gray" href="#">SIGN UP</a>
				</li>
				<li class="nav-item">
			  		<a class="nav-link gray" href="companyLogin.php">LOG IN</a>
				</li>
			</ul>
	    </div>
	  </div>
	</nav>

	<div class="container-sm "id="myDiv">
		<form id="myform" style="width:50%; margin: 0 auto;" autocomplete="off" method="post">
			<div class="mb-0">
				<label for="email" class="form-label">Email Address</label>
				<input id="email" class="form-control" type="text" name="email"style="width:100%" value="abc@gmail.com">
			</div><br>
			<div class="mb-0">
				<label for="pass" class="form-label">Password</label>
				<input type="password" class="form-control" id="pass" name="pass" style="width:100%" >
			</div><br>
			<div id="liveAlertPlaceholder"></div>
			<input type="submit" id="liveAlertBtn" class="btn btn-success" value="Submit">
		</form>
	</div>
	<br>

	<!-- Modal -->
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				<p id="messgae"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Understood</button>
				</div>
			</div>
		</div>
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
		$(document).ready(function () {
			$( "#myform" ).validate({
				rules: {
					email: {
						required: true,
						email: true,
					},
					pass: {
						required: true,
					}
				},
				submitHandler: function(form) {
					var message = '';
					var inputValue = $('#pass').val();
					if(inputValue == "qwerty@123"){
						message = "Correct Password";
					}else{
						message= "Incorrect Password";
					}
					$('#messgae').text(message);
					$('#staticBackdrop').modal("show");
					// var inputValue = $('#pass').val();
					// console.log(inputValue);
				 //    if (inputValue == "qwerty@123"){
					//   	alertTrigger.addEventListener('click', () => {
					//   		alert('Correct Password', 'success')
				 //  		})
				 //  	} else {
				 //  		alertTrigger.addEventListener('click', () => {
					//     	alert('Wrong Password', 'danger')
				 //  		})
				 //  	}
					// form.submit();
				}
			});

		});

	</script>

</body>

</html>