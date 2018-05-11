<?php
require('../model/database.php');
require('../model/todo.php');
require('../model/todo_db.php');
require('../model/user.php');
require('../model/user_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_todos';
    }
}

if ($action == 'list_todos') {

    //get user id for table
    $tableid = UserDB::getTableID($formEmail, $formPass);
    if ($tableid == NULL ) {
        $error = "Invalid form data. Check all fields and try again.";
        include('../errors/error.php');
    }

    // Get unfinished and finished tasks
    $todos = TodoDB::getTodos($tableid);
    $todosdone = TodoDB::getTodosDone($tableid);



    // Display the lists
    include('todo_list.php');
} else if ($action == 'delete_todo') {
    // Get the IDs
    $todo_id = filter_input(INPUT_POST, 'todo_id',
        FILTER_VALIDATE_INT);

    // Delete the task
    TodoDB::deleteTodo($todo_id);

} else if ($action == 'show_add_todo') {
    include('todo_add.php');
} else if ($action == 'add_todo') {
    // Get ownerid
    $tableid = UserDB::getTableID($formEmail, $formPass);
    $createddate = GETDATE();
    $duedate = filter_input(INPUT_POST, 'duedate');
    $message = filter_input(INPUT_POST, 'message');
    // Task incomplete by default
    $isdone = 0;
    if ($duedate == NULL || $message == NULL) {
        $error = "Invalid data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        $todo = new Todo($formEmail, $tableid, $createddate, $duedate, $message, $isdone);
        TodoDB::addTodo($todo);

    }
}
?>