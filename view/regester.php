<?php 
    $title ="create account"; ?>
<?php  ob_start();  ?>
<div class="signup-form">
    <form  method="POST">
		<h2>Regester</h2>
		<p class="hint-text">Regester</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="nom" placeholder="nom" required="true"></div>
				<div class="col"><input type="text" class="form-control" name="prenom" placeholder="prenom" required="true"></div>
			</div>        	
        </div>
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Enter your Email " required="true">
        </div>
		<div class="form-group">
        	<input type="password" class="form-control" name="password" placeholder="Enter your Password " required="true">
        </div>
	

		
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Regester</button>
        </div>
    </form>
	<a href="index.php?action=login"><div style="background-color:black;" >sign in</div></a>
</div>
<?php  $body=ob_get_clean(); ?>
<?php
include_once 'include/nav_bar.php';
?>
