<?php
include "../class/users.php";
$cat=new users;
$category=$cat->cat_shows();
//print_r($category);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Dashboard </title>

 
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <link href="../css/dashboard.css" rel="stylesheet">


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
           
			background-image: url("admin.jpg");
         }
		 
      </style>
   
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header" style="color:red" ><marquee>This is Dashboard:If you are a admin you can add question and start your exam</marquee></h1>

          <div class="table-responsive">
            <table class="table table-striped">
			<?php
			if(isset($_GET['msg']) && !empty($_GET['msg']))
			{
				echo "<p>data insert successfully</p>";
			}
			
			?>
			
			
				  <form method="post" action="add_quiz.php">
					<div class="form-group">
					  <label for="text"><h2>Question</h2></label>
					  <input type="text" class="form-control" name="qus"  placeholder="Enter question" style="background-color:#B29E9E">
					</div>

					<div class="form-group">
					  <label for="text"><h2>option-1</h2></label>
					  <input type="text" class="form-control"  name="op1"  placeholder="Enter option-1" style="background-color:#B29E9E">
					</div>
					<div class="form-group">
					  <label for="text"><h2>option-2</h2></label>
					  <input type="text" class="form-control" name="op2"  placeholder="Enter option-2"style="background-color:#B29E9E" >
					</div>
					
					<div class="form-group">
					  <label for="text" ><h2>option-3</h2></label>
					  <input type="text" class="form-control"  name="op3"  placeholder="Enter option-3"style="background-color:#B29E9E">
					</div>
					
					<div class="form-group">
					  <label for="text"><h2>option-4</h2></label>
					  <input type="text" class="form-control"  name="op4" id="email" placeholder="Enter option-4" style="background-color:#B29E9E">
					</div>
					<div class="form-group">
					  <label for="text"><h2>answer</h2></label>
					  <input type="text" class="form-control" name="ans" id="email" placeholder="Enter answer" style="background-color:#B29E9E">
					</div>
						<div class="form-group">
						   
						   <select class="form-control" id="sel1" name="cat" style="background-color:#B29E9E">
						   
								<option value="" disabled >choose category</option>
								<?php
								foreach($category as $c)
								{
									echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
								}
								
								?>								
						  </select>
						</div>
					<button type="submit" class="btn btn-default" style="background-color:#B29E9E">Submit</button><br>
				  </form>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/vendor/holder.min.js"></script>
  
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
