<?php
class UsersDB
{
    public static function getUsers()
    {
        $db = Database::getDB();
        $query = 'SELECT * FROM accounts';
        $statement = $db->prepare($query);
        $statement->execute();
        $rows = $statement->fetch();
        $statement->closeCursor();

        foreach ($rows as $row){
        $user = new User($row['id'],
            $row['email'],
            $row['fname'],
            $row['lname'],
            $row['phone'],
            $row['birthday'],
            $row['gender'],
            $row['password']);
        $user->setId($row['id']);
        $users[] = $user;
        }
        return $users;
    }

    public static function deleteUser($id)
    {
        $db = Database::getDB();
        $query = 'DELETE FROM accounts
                  WHERE id = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function addProduct($user)
    {
        $db = Database::getDB();
        $id = $user->getId();
        $email = $user->getEmail();
        $fname = $user->getFname();
        $lname = $user->getLname();
        $phone = $user->getPhone();
        $birthday = $user->getBirthday();
        $gender = $user->getGender();
        $password = $user->getPassword();
        $query = 'INSERT INTO accounts
                     (id, email, fname, lname, phone, birthday, gender, password)
                  VALUES
                     (:id, :email, :fname, :lname, :phone, :birthday, :gender, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':fname', $fname);
        $statement->bindValue(':lname', $lname);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':birthday', $birthday);
        $statement->bindValue(':gender', $gender);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function changePassword($id, $user)
    {
        $db = Database::getDB();
        $password = $user->setPassword();
        $query = 'UPDATE accounts SET password = :password WHERE id = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    }
}
?>