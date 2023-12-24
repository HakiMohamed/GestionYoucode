<?php 
//Database Connection

  	//Getting Post Values


    //Query for data updation

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Crud Operation Using PHP and MySQLi</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="signup-form">
<form  method="POST">
		<h2>Fill Data</h2>
		<p class="hint-text">Fill below form.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" value="<?=$result->getNom();?>" name="nom" placeholder="nom" required="true"></div>
				<div class="col"><input type="text" class="form-control" value="<?=$result->getPrenom();?>" name="prenom" placeholder="prenom" required="true"></div>
			</div>        	
        </div>
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email"  value="<?=$result->getEmail();?>"  placeholder="Enter your Email " required="true">
        </div>
		<div class="form-group">
        	<input type="password" class="form-control"  value="<?=$result->getPassword();?>" name="password" placeholder="Enter your Password " required="true">
        </div>
	
          <input type="hidden"  name="id"  value="<?=$result->getId();?>" >
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>

		
    </form>




</div>
</body>
</html>