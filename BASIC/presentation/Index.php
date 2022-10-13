<?php

require_once "../data-access/promotionDAL.php";
    
    $promotionDAL = new promotionDAl();

if(!empty($_POST)){
	$promotion = new promotion();
	$promotion->setName($_POST['name']);
	$promotionDAL->addPromotion($promotion);

}

$data =$promotionDAL->affichage();
print_r($data);



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Ajouter promotion</title>
</head>
<body>
	<header>
		<h1>Ajouter promotion</h1>
	</header>
<form action="" method="POST">
Nom de promotion: <input type="text" name="name" Autocomplete ='off' >                                                         
   
<button type="submit">Envoyer</button>

</form> <br><br><br>


<table>

  <tr>
    <th>Number</th>
    <th>promotion</th>
    <th>actions</th>
  </tr>

  <?php
  $data =$promotionDAL->affichage();
  $Number = 1;
  foreach($data as $value){
   ?>
  <tr>
   <td> <?php echo $Number++;  ?></td>
   <td> <?php echo $value ['names']; ?></td>
   <td>
    <a href="update.php?id=<?=$rows['id']?>"class="btn">Update</a>
    <a href="delete.php?id =<? echo $value['id'];?>">supprimer</a>
   </td>
  </tr>
<?php
};
 ?> 
</table>

</body>
</html>