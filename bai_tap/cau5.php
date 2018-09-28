<?php 
	require ('data.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>My web</title>
 </head>
 <body>
 	<table style="border: 1px solid black">
 		<tr >
 			<td >ID</td>
 			<td>Name</td>
 			<td >Gmail</td>
 		</tr>
 			<?php for ($i=0; $i < count($users); $i++): ?>
 			<tr>
 			<td ><?php echo $users[$i]['id'];?></td>
 			<td ><?php echo $users[$i]['name'];?></td>
 			<td ><?php echo $users[$i]['email']['gmail'];?></td>
 			</tr>
 			<?php endfor; ?>
 			
 	</table>


 		<form method="get" >
 			<input type="txt" name="id" >
 			<input type="submit" name="submit" value="Search">
 		</form>
 		<?php 
 		if(!empty($_GET['id'])) {?>
 			<table >
 			<tr>
 				<td >ID</td>
 				<td >Name</td>
 				<td >Email</td>
 			</tr>
 			<?php for ($i=0; $i < count($users); $i++) { ?>
	 			<?php if ($_GET['id'] == $users[$i]['id']) {
	 				?>
	 				<tr>
 					<td ><?php echo $users[$i]['id'];?></td>
 					<td ><?php echo $users[$i]['name'];?></td>
 					<td ><?php echo $users[$i]['email']['gmail'];?></td>
 					</tr>
	 			<?php } ?>	
 			<?php } ?>
 			</table>
 		<?php } 
 		 else { ?>
 			<p >Khong tim thay</p>
 		<?php } ?>
	
 </body>
 </html>