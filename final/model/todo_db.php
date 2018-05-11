<?php
class TodoDB
{
    public static function getTodos($tableid)
    {
        $db = Database::getDB();
        $isdone = 0;

        $query = 'SELECT * FROM todos
                  WHERE todos.isdone = :isdone AND todos.ownerid = :tableid
                  ORDER BY duedate';
        $statement = $db->prepare($query);
        $statement->bindValue(":isdone", $isdone);
        $statement->bindValue(":tableid", $tableid);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        foreach ($rows as $row) {
            $todo = new Todo(
                $row['createddate'],
                $row['duedate'],
                $row['message']);
            $todo->SetId($row['id']);
            $todos[] = $todo;
        }
        return $todos;
    }

    public static function getTodosDone($tableid)
    {
        $db = Database::getDB();
        $isdone = 1;

        $query = 'SELECT * FROM todos
                  WHERE todos.isdone = :isdone AND todos.ownerid = :tableid
                  ORDER BY duedate';
        $statement = $db->prepare($query);
        $statement->bindValue(":isdone", $isdone);
        $statement->bindValue(":tableid", $tableid);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();

        foreach ($rows as $row) {
            $tododone = new Todo(
                $row['createddate'],
                $row['duedate'],
                $row['message']);
            $tododone->SetId($row['id']);
            $todosdone[] = $tododone;
        }
        return $todosdone;
    }

    public static function deleteTodo($todo_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM todos
                  WHERE id = :todo_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':todo_id', $todo_id);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function addTodo($todo) {
        $db = Database::getDB();
        $formEmail = $todo->getOwneremail();
        $tableid = $todo->getOwnerid();
        $createddate = $todo->getCreateddate();
        $duedate = $todo->getDuedate();
        $message = $todo->getMessage();
        $isdone = $todo->getIsdone();

        $query = 'INSERT INTO products
                     (owneremail, ownerid, createddate, duedate, message, isdone)
                  VALUES
                     (:owneremail, :ownerid, :createddate, :duedate, :message, :isdone)';
        $statement = $db->prepare($query);
        $statement->bindValue(':owneremail', $formEmail);
        $statement->bindValue(':ownerid', $tableid);
        $statement->bindValue(':createddate', $createddate);
        $statement->bindValue(':duedate', $duedate);
        $statement->bindValue(':message', $message);
        $statement->bindValue(':isdone', $isdone);
        $statement->execute();
        $statement->closeCursor();
    }


}
?>