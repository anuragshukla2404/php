<!DOCTYPE html>
<html lang="en">
<head>
<title>webpage blog</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styl.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Data Science Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact-us">Contact us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Topics
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#machine-learning">Machine Learning</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#deep-learning">Deep Learning</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#nlp">NLP</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search blog posts..." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>    

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/machine-learning.jpeg" class="d-block w-100" alt="machine learning">
    </div>
    <div class="carousel-item">
      <img src="images/deep-learning.jpg" class="d-block w-100" alt="deep learning">
    </div>
    <div class="carousel-item">
      <img src="images/nlp.jpg" class="d-block w-100" alt="nlp">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a id="machine-learning">
<section class="my-4">
<div class="py-4">
    <h2 class="text-center">Machine Learning</h2>
</div>
<div class="container-fluid">
    <div class="row">
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/machine-learning.jpeg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/machine-learning 1.jpeg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/machine-learning 2.jpeg" class="img-fluid pb-3">
</div>
</div>
</div>
</section>
</a>

<a id="deep-learning">
<section class="my-4">

<div class="py-4">
    <h2 class="text-center">Deep Learning</h2>
</div>
<div class="container-fluid">
    <div class="row">
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/deep-learning.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/Deep-Learning 1.jpeg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/deep-learning 2.png" class="img-fluid pb-3">
</div>
</div>
</div>
</section>
</a>

<a id="nlp">
<section class="my-4">

<div class="py-4">
    <h2 class="text-center">NLP</h2>
</div>
<div class="container-fluid">
    <div class="row">
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/nlp.jpg" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/nlp-1.png" class="img-fluid pb-3">
</div>
<div class="col-lg-4 col-md-4 col-12">
    <img src="images/nlp-2.png" class="img-fluid pb-3">
</div>
</div>
</div>
</section>
</a>

<a id="contact-us">
<section>
<div class="py-4">
    <h2 class="text-center">Contact us</h2>
</div>
<div class="w-50 m-auto">
    <form action="about.php" method="post">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Number:</label>
            <input type="text" name="number" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</section>
</a>

<a id="about">
<section class="my-4">

<div class="py-4">
    <h2 class="text-center">About</h2>
</div>
<div class="container-fluid">
    <h3 class="text-center">Anurag Shukla</h3>
    <p class="text-center"><b>Hello,This is Anurag Shukla,Welcome to Data Science Blog, your go-to blog for insights, tutorials, and the latest advancements in data science, machine learning,deep learning and NLP. Our mission is to empower data enthusiasts, professionals, and learners with accessible knowledge, practical guides, and real-world applications. From deep dives into complex algorithms to beginner-friendly how-tos, we cover everything you need to stay ahead in this rapidly evolving field. Join us as we explore the potential of data to transform industries and drive innovation.</b></p>
</div>
</section>
</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>