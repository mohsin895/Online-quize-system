<!DOCTYPE html>
<html lang="en">
<head>
  <title>mohsin sikder</title>
  <meta charset="utf-8">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
         body {
           
			padding-botom:40px;
			
			background-image: url("rahat.jpg");
         }
		 
      </style>
</head>
<marquee style="color: red;"><h1><i><em>At first signup then login and start your quize </em></i></h1></marquee>
<body>
<br>
<br>
<div class="container">

  <div class="row">
    <div class="col-sm-12">
       <div class="panel panel-danger">
          <div class="panel-heading"><marquee style= "color:#00FF00" behavior="alternate"><h1><em>Online Exam System</em></h1></marquee></div>
         
      </div>
    </div>
    </div>
</div>


  <div class="container">
    <div class="row">
           <div class="col-sm-6" style="background-color:#ff8080">
            <div class="panel panel-info">
                      <div class="panel-heading">Signin Form</div>
            <div class="panel-body">
           <?php
            if(isset($_GET['run'])  && $_GET['run']=="failed")
            {
              echo "Your email or password is not correct";
            }
            
            
            ?>
    <form role="form" action="signin_sub.php" method="post" style="background-color:#ff8080">
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter your email" style="background-color:	#e61919">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter your password" style="background-color:	#e61919">
								</div>
								<input type="checkbox" checked="checked"> Remember me 
									<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
								<button type="submit" class="btn btn-default" style="background-color:	#e61919">Submit</button>
								 
							  </form>
						  </div>
						  </div>
					  </div>
         
           <div class="col-sm-6" style="background-color:#ff8080">
              <div class="panel panel-info">
                
                <div class="panel-heading">Signup Form</div>
              <div class="panel-body" style="background-color:#ff8080" >
              <?php 
              if(isset($_GET['run'])&& $_GET['run']=="success")
              {
                echo "<mark>Your registration successfully done</mark>";
              } 
              ?>
                <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data" style="background-color:#ff8080" >
                  <div class="form-group" >
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="n" id="name" placeholder="Enter your name" style="background-color:	#e61919">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>;
                  <input type="email" class="form-control" name="e" id="email" placeholder="Enter your email" style="background-color:	#e61919">
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter your password" style="background-color:	#e61919">
                </div>
                <div class="form-group" >
                  <label for="pwd" >Upload your iamge</label>
                  <input type="file" class="form-control" name="img" style="background-color:	#e61919" >
                </div>
				  
				    <button type="submit" class="btn btn-default" style="background-color:	#e61919">Submit</button>
                </form>
              </div>
              </div>
            </div>
     </div>
   </div>
   
</body>
</html>
