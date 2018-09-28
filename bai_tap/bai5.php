<?php
	require("data.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>My web</title>
</head>
<body>
	<table>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Gmail</td>
	</tr>
	<?php for($i=0; $i<count($users); $i++): ?>
		<tr>
		<td> <?php echo $users[$i]['id'];?></td>
		<td> <?php echo $users[$i]['name'];?></td>
		<td> <?php echo $users[$i]['email']['gmail'];?></td>
		</tr>
	<?php endfor; ?>
</table>
	<form method="get">
		<input type="txt" name="id">
		<input type="submit" name="submit" value="search">
	</form>
<?php if (!empty($_GET['id'])) {?>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Gmail</td>
		</tr>
	
	<table>
	
		<?php for ($i=0; $i < count($users) ; $i++){ ?>
			<?php if ($_GET['id']==$users[$i]['id']){ ?>
			<tr>
				<td> <?php echo $users[$i]['id'];?></td>
				<td> <?php echo $users[$i]['name'];?></td>
				<td> <?php echo $users[$i]['email']['gmail'];?></td>
			</tr>
			<?php } ?>
				<?php } ?>
</table>
		<?php 
	} 
	 else { ?>
		<p>not available !</p>
	<?php } ?>
</body>
</html>