<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shopnow</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
   
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/gallery-img-1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="image/gallery-img-2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="image/gallery-img-3.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="image/blog-1.jpg"class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-4">welcome to Myshop</h2>
			<p class="py-5">lorem ipsum jakk sasj wwwk akakkjdj
			akmk ajsdj ananbs ajnhd dffsw dsdsddh 
		sjsds sdsd sds fs fdgfdgf fgrgtb fdf sffsss</p>
		<a href="about.php"class="btn btn-success">check more</a>
		</div>
	</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Products</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
	          <div class="card" >
              <img class="card-img-top" src="image/product-1.jpg" alt="Card image">
              <div class="card-body">
              <h4 class="card-title">Banana</h4>
              <p class="card-text">$10</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
</div>
				
			</div>
					<div class="col-lg-4 col-md-4 col-12">
	          <div class="card" >
              <img class="card-img-top" src="image/product-4.jpg" alt="Card image">
              <div class="card-body">
              <h4 class="card-title">Milk</h4>
              <p class="card-text">$11</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
</div>
				
			</div>
					<div class="col-lg-4 col-md-4 col-12">
	          <div class="card" >
              <img class="card-img-top" src="image/product-3.jpg" alt="Card image">
              <div class="card-body">
              <h4 class="card-title">meat</h4>
              <p class="card-text">$23</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
</div>
				
			</div>
			
		</div>
	
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">All Products</h2>
	</div>
	<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/product-8.jpg" class="img-fluid pb-4s">
      <div class="card-body">
              <h4 class="card-title">meat</h4>
              <p class="card-text">$23</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/product-1.jpg" class="img-fluid pb-4s">
      <div class="card-body">
              <h4 class="card-title">meat</h4>
              <p class="card-text">$23</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/product-2.jpg" class="img-fluid pb-4s">
      <div class="card-body">
              <h4 class="card-title">meat</h4>
              <p class="card-text">$23</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/product-3.jpg" class="img-fluid pb-4s">
      <div class="card-body">
              <h4 class="card-title">meat</h4>
              <p class="card-text">$23</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/product-4.jpg" class="img-fluid pb-4s">
      <div class="card-body">
              <h4 class="card-title">meat</h4>
              <p class="card-text">$23</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/product-5.jpg" class="img-fluid pb-4s">
      <div class="card-body">
              <h4 class="card-title">meat</h4>
              <p class="card-text">$23</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/product-6.jpg" class="img-fluid pb-4s">
      <div class="card-body">
              <h4 class="card-title">meat</h4>
              <p class="card-text">$23</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/product-7.jpg" class="img-fluid pb-4s">
      <div class="card-body">
              <h4 class="card-title">meat</h4>
              <p class="card-text">$23</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
      <img src="image/product-8.jpg" class="img-fluid pb-4s">
      <div class="card-body">
              <h4 class="card-title">meat</h4>
              <p class="card-text">$23</p>
              <a href="#" class="btn btn-primary">Buy now</a>
  </div>
    </div>


</div> 
		
	</div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">All Products</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userifo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user"autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email"autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
        <label>Mobile no</label>
        <input type="text" name="mobile"autocomplete="off" class="form-control">
        </div>

         <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comments"></textarea>
        </div>
        <button type="submit" class="btn-success">Submit</button>
      </form>
  </div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@Myshopproduction</p>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>