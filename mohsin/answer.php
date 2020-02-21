<?php
include("class/users.php");
$ans=new  users;
$answer=$ans->answer($_POST);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	 <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color:#FF00FF;
			
         }
         
         
      </style>
  
</head>
<body><h1>
	<center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h1 style="color:#FF00FF">Your Quiz results</h1>
  <table class="table table-bordered" style="color:#800000">
    <thead>
      <tr>
        <th><h3>Total number of Questions</h3></th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><h3>Attempted qusetions</h3></td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td><h3>Right answer</h3> </td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td><h3>Wrong answer</h3></td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
	  <tr>
        <td>No answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	  <tr>
        <td><h3>Your result</h3></td>
        <td><?php 
		$per=($answer['right']*100)/($total_qus);
		
		echo $per."%";
		?></td>
      </tr>
    </tbody>
  </table></div>
  <div class="col-sm-2"></div>
</div>
	
	</center>
	</h1>

</body>
</html>