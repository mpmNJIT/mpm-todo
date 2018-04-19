<?php
	require_once('database.php');
	require_once('users_db.php');
	require_once('user.php');

	$users = UsersDB::getUsers();
?>
<html>
	<body>
		<table style="width:100%">
			<tr>
				<th>ID</th>
				<th>Email</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Phone</th>
				<th>Birthdate</th>
				<th>Gender</th>
				<th>Password</th>
			</tr>
			<?php foreach ($users as $user) : ?>
				<?php echo $user->displayUserRow(); ?>
			<?php endforeach; ?>
		</table>
	</body>		
</html>
