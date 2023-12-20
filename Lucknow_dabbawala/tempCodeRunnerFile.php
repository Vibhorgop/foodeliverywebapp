<?php
<!DOCTYPE html>
<html>
<head>
<?php include("bootstrap.php"); ?>

<style type="text/css">
  html {
    scroll-behavior: smooth;
  }
	th{
		text-align: center;

	}
	tr{
		text-align: center;
	}
  .container-fluid{
    margin: 0px;padding: 0px;overflow:hidden;
  }

</style>
</head>
<body>
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <a class="navbar-brand display-4 text-light" href="#"><big><kbd>Lucknow Dabbawala</kbd></big></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 mr-auto">
    	<li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="#about" class="nav-link">About Menu</a></li>
      <li class="nav-item"><a href="#pricing" class="nav-link">Pricing</a></li>
      <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
      <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
      <li class="nav-item"><a href=" login_delivery.php" class="nav-link">Delivery-Boy </a></li>
    	<li class="nav-item"><a href="adminlogin.php" class="nav-link">Admin</a></li></ul>
      <ul class='navbar-nav mr-auto'>

    	<li class="nav-item lead"><a href="userreg.php" class="nav-link text-light">Registration</a></li>
      <li class="nav-item lead"><a href="userlogin.php" class="nav-link text-light">Login</a></li>
    	

    </ul>
</div>
  </nav>

<!--Corousel div-->
<div class="bd-example" id="home">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/tiffin1.jpg" class="d-block w-100" height="530" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Order using UPI</h5>
          <p>Upto 60% off</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image/tiffin2.png" class="d-block w-100" alt="..." height="530">
        <div class="carousel-caption d-none d-md-block">
          <h5>What are you waiting for?</h5>
          <p>Fastest delivery</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image/tiffin3.jpg" class="d-block w-100" alt="..." height="530">
        <div class="carousel-caption d-none d-md-block">
          
        </div>
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--grid system-->
<div class="container mt-4 mb-4" id="about">
<div class="row">
    <div class=" col-md-4" ><h2 align="center">Veg Tiffin</h2><img src="image/veg1.jpg"  class="img-fluid img-thumbnail w-100 h-100"></div>
    <div class=" col-md-4" ><h2 align="center">Sunday Special<span class="badge badge-secondary ml-4">New</span></h2><img src="image/sunday.jpg" class="img-fluid img-thumbnail w-100 h-100"></div>
    <div class=" col-md-4" ><h2 align="center">Veg Tiffin</h2><img src="image/veg3.jpg" class="img-fluid img-thumbnail w-100 h-100"></div>
  </div></div> <br><br><br>
  <!--table price-->
  <div class="container mt-4 mb-4" id="pricing"> 
<div class="row">
  <div class="col-md-12"><h1 class="text-center mb-4">Pricing</h1></div>
</div>
   <div class="row">
  <div class="col" >
  	<table class="table table-hover table-bordered">
    <thead>
      <tr>
        <tr><th>Veg</th><th>Breakfast</th><th>Lunch</th><th>Dinner</th></tr>
    </thead>
    <tbody>
      <tr>
        <td>Veg Tiffin</td>
        <td>40 Rs.</td>
        <td>60 Rs.</td>
        <td>100 Rs.</td>
      </tr>
<tr>
        <td>Non-Veg Tiffin</td>
        <td>60 Rs.</td>
        <td>100 Rs.</td>
        <td>180 Rs.</td>
      </tr>
      
    </tbody>
  </table>
</div>
</div></div>

<div class="container" id="services">
  <div class="row">
    <div class="col-md-12"><h1 class='text-center mb-4'>Services</h1></div>
  </div>
  <div class="row text-center">
    <div class="col-md-3 border">
      <h2 class="text-info mt-4">Lightening Fast Delivery</h2>
      <div class="m-4">
      Experience our superfast delivery for food delivered fresh & on time
      </div>
    </div>
    <div class="col-md-3 border">
      <h2 class="text-info mt-4">Live Order Tracking</h2>
      <div class="m-4">
      Know where your order is at all times, from the restaurant to your doorstep.
        </div>
    </div>
    <div class="col-md-3 border">
      <h2 class="text-info mt-4">No Minimum Order</h2>
      <div class="m-4">
      Order in for yourself or for the group, with no restrictions on order value.
      </div>
    </div>
        <div class="col-md-3 border">
     <h2 class="text-info mt-4"> Seamless Payment Options</h2>
      <div class="m-4">
        We believe in serving you so there should be no problem of payment modes 
      </div>
    </div>
  </div>
</div>

<div class="container mt-4" id="contact">
  <div class="row">
    <div class="col-md-12"><h1 class='text-center mb-4'>Contact Us</h1></div>
  </div><form>
  <div class="row mb-2">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <input type="text" name="name" placeholder="Enter Name"
      class="form-control">
    </div>
    <div class="col-md-4">
     <input type="text" name="email" placeholder="Enter Email"
      class="form-control">
    </div>
    <div class="col-md-2"></div>
  </div>
  <div class="row mb-2">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <input type="text" name="sub" placeholder="Enter Subject"
      class="form-control">
    </div>
    <div class="col-md-2"></div>
  </div>
  <div class="row mb-2">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <textarea name='msg' class='form-control'
      placeholder="Enter Messages / Queries / Feedbacks / Complaints"></textarea>
    </div>
    <div class="col-md-2"></div>
  </div>
    <div class="row mb-2">
    <div class="col-md-5"></div>
    <div class="col-md-2 ">
      <button class='btn btn-primary btn-block'>SEND</button>
    </div>
    <div class="col-md-5"></div>
  </div>
  </form>
  <div class="row mb-2">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <table class='table'>
        <tr>
          <td>Address : </td><td>52/2 Near Jain Temple, Kachahri road Sitapur,261001</td>
        </tr>
        <tr>
          <td>Email : </td><td>vibhorg022@gmail.com</td>
        </tr>
        <tr>
          <td>Mobile : </td><td>7725934335</td>
        </tr>
      </table>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
<div class="container-fluid mt-4 mb-4">
  <div class="row">
    <div class="col-md-12 bg-dark text-light"><h6 class='text-center'>
      All Rights Reserved &copy; Lucknow Dabbawala@2023
    </h6></div>
  </div>
  </div>

</body>
</html>