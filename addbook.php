
<html>
<head>
<title>Book Exchange</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="js/bootstrap.min.js" rel="stylesheet" >
<link rel="shortcut icon" type="image/x-icon" href="img/imgo.jpg">
</head>
<div style="background-image: url(img/lib.jpg); background-size: cover; height: 100%">
<!-- <body style="background-color: pink"> -->
  <div>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
  <ul class="navbar-nav" style="float: left" >
    <li class="nav-item active">
      <a class="nav-link" href="index.html" style="font-size: 20">Book Exchange</a>
    </li>
  </ul> 
</nav>
<div style="background-image: url(img/blue1.jpg);height:700px;width: 100%;background-size: cover ;">
<div class="row"  style="margin-top:;margin-left:500px">
<div class="col-lg-4" style="background-color: #bcc0c4;float: center;border-radius: 5%" >
 <form style="text-align: center;" align="middle" method="post" enctype="multipart/form-data" action="database.php?id=<?php echo $_GET['book']?>">
  <h4 align="middle">Add Book!!!</h4>
  <div class="form-group">
    <label for="exampleInputEmail1">TITLE</label>
    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" name="title">
    
  </div>
  <div class="form-group">
    <label for="exampleInputname1">AUTHOR</label>
    <input type="name" class="form-control" id="exampleInputPassword1" placeholder="Author" name="author">
  </div>
  <div class="form-group">
    <label for="exampleInputname1">YOP</label>
    <input type="name" class="form-control" id="exampleInputName1" placeholder="YOP" name="yop">
  </div>
  <div class="form-group">
    <label for="exampleInputname1">DESCRIPTION</label>
    <input type="name" class="form-control" id="exampleInputName1" placeholder="Description" name="desc">
 

  <div class="form-group" style="margin-bottom: 20px">
    <label for="exampleFormControlFile1">ADD COVER</label>
    <input type="file" class="form-control-file" id="filer" name="filer">
  </div>
  <button type="submit"  name="share" class="btn btn-block btn-success">Share!!!!!!</button>
  <br>
  <button class="btn"><a href="trial.php">Back</a></button>
</form>
</div>
</form>
</div>
</div>


</div>
</body>
</html>
 
 