<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="@yield('meta-description','Yigit Goc Blog - Junior Laravel developer that likes to record what he learns.')">
    <title>@yield('title')</title>
</head>
<body>

    <nav id="navbar_id" class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="/">Yigit Goc Blog</a>

      </nav>

      <div class="container">
        <div class="row">
          <div class="col-md-9">
            @yield('container')
          </div>
          <div class="col-md-3 side-div">
            <img class="profile_img rounded-circle" src="https://avatars2.githubusercontent.com/u/27034075?s=460&u=1da94871ceff3898ef0e0938387a8c1734f8932d&v=4" alt="">
            <hr>
            <h2>Hi, I am Yigit</h2>
            <hr>
            <p>I am a web developer that loves exploring new concepts. I use Laravel/Vue for most of my stuff. However, I like messing around with new languages/frameworks.</p>
            <a href="https://github.com/ygoc95" class="fa fa-github fa-4x" ></a>
          </div>
        </div>
      </div>    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>