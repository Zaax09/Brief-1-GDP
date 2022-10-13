<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>



		
                        <form action="" method="POST">
                                 Nom de promotion: <input type="text" name="name"value="<?=$row['name'] ?>" Autocomplete ='off' >    
                                 <button type="submit">Envoyer</button>

                        </form>

           

		

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>

		    <a href="ead.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>