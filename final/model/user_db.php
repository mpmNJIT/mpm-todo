<?php
class UserDB
{
    public static function getTableId($formEmail, $formPass)
    {
        $db = Database::getDB();

        $query = 'SELECT id FROM accounts
                  WHERE accounts.email = :formemail AND accounts.password = :formpass';
        $statement = $db->prepare($query);
        $statement->bindValue(":formemail", $formEmail);
        $statement->bindValue(":formpass", $formPass);
        $statement->execute();
        $tableid = $statement->fetchAll();
        $statement->closeCursor();

        return $tableid;
    }
}