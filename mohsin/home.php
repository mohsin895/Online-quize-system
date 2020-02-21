<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
//print_r($profile->cat);
//print_r($profile->data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
			background-image: url("yeamin.jpg");
         }
         
         
      </style>
  
</head>
<body>
<marquee style="color: red;"><h1><i>If you are a mamber you can start your exam </i></h1></marquee>
<div class="container">
  <h1 style="color: blue;"><center><marquee width="400px" height="100px" behavior="alternate" style="border:20px solid #006400" behavior="alternate">  
This is your profile 
</marquee>  
</marquee></center> </h1>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><h3><b>Home</b></h3></a></li>
    <li><a data-toggle="tab" href="#menu1"><h3><b>Profile</b></h3></a></li>
  
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h1 style="color: #00FF7F;"><center><marquee width="400px" height="100px" behavior="alternate" style="border:10px solid #006400" behavior="alternate">  
</br>
Click start exam and select your option
</marquee>  
</marquee></center> </h1>
	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start exam</button></center>       
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		  <form  method="post" action="qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <option>select category</option>
		  <?php		  
		  foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
			<?php   }?>
		  </select><br>
		  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
		</form>
	 
	  
	  </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
     <h1 style="color: 	#ff00bf;"><center><marquee width="400px" height="100px"  style="border:5px solid #FF6347" >  
</br>
This is your details
</marquee>
	  
	  <table class="table">
    <thead style="color:#ff00bf">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
	
	<?php 
	foreach($profile->data as $prof)
	{?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['name'];?></td>
        <td><?php echo $prof['email'];?></td>
        <td><img src="img/<?php echo $prof['img'];  ?>" alt="" width="35px" height="30px" /></td>
      </tr>
    </tbody>
	<?php 	}?>
  </table>
	  
	   </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>

    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
     
    </div>
	  
	  
    
  </div>
</div>
</body>
</html>
