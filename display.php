
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body>
 <div class="container">
 	<div class="col-lg-12 m-auto text-center text-primary bg-dark">
 		<h1>table</h1>
 		</div>
 		<table class="table table-hover text-center ">
 			<tr>
 				<th>id</th>
 				<th>username</th>
 				<th>password</th>
 				<th>delete</th>
 				<th>update</th>

 			</tr>
 			
 			<?php 


               include 'conn.php';
               $selectQuery="select * from crudtable";
               $query=mysqli_query($con,$selectQuery);

               while($result = mysqli_fetch_array($query))
               {
               	?>

               	<tr>
						     <td> <?php echo $result['id']; ?> </td>  
							 <td> <?php echo $result['username']; ?> </td>  
							 <td> <?php echo $result['password']; ?> </td> 
							  <td> <button><a href="delete.php?id=<?php echo $result['id']; ?>">DELETE</a></button> </td> 
							   <td> <button><a href="update.php?id=<?php echo $result['id']; ?>">UPDATE</a></button> </td> 
					               
                 </tr>

               <?php
                }
 			 ?>
 		</table>
 		
 	
 	
 </div>

 </body>
 </html>