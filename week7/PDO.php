<?php

	$username = 'mpm54';
	$password = 'SbYrtd3sv';
	$hostname = 'sql2.njit.edu';

	$dsn = "mysql:host=$hostname;dbname=$username";

	try{
		$db = new PDO($dsn, $username, $password);
		echo 'Connected Successfully!<br>';
	} catch (PDOException $error) {
			echo '<h3>DB Error</h3>';
			echo $error->getMessage() . "<br>";
			exit();
	} catch (Exception $error) {
		echo '<h3>Generic</h3>';
		echo $error->getMessage() . "<br>";
		exit();
	}

	$idlimit = 6;
	$idcount = 0;
	$query = 'SELECT id, email, fname, lname, phone, birthday, gender, password FROM accounts WHERE id < :idlimit';
	$statement = $db->prepare($query);
	$statement->bindValue(':idlimit', $idlimit, PDO::PARAM_INT);
  	$statement->execute();

	$accounts = $statement->fetchAll();
	$statement->closeCursor();


?>

<table style="width:100%">
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Birthday</th>
        <th>Gender</th>
        <th>Password</th>
    </tr>
    <?php foreach ($accounts as $account) {
        $idcount += 1; ?>
        <tr>
            <td><?php echo $account['id']; ?></td>
            <td><?php echo $account['email']; ?></td>
            <td><?php echo $account['fname']; ?></td>
            <td><?php echo $account['lname']; ?></td>
            <td><?php echo $account['phone']; ?></td>
            <td><?php echo $account['birthday']; ?></td>
            <td><?php echo $account['gender']; ?></td>
            <td><?php echo $account['password']; ?></td>
        </tr>

    <?php } ?>
</table>

<?php echo "<br> $idcount record(s) found!" ?>
