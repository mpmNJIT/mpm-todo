<?php include '../view/header.php'; ?>
<main>
    <h1>Add Task</h1>
    <form action="index.php" method="post" id="add_todo_form">
        <input type="hidden" name="action" value="add_todo" />


        <label>Due date and time:</label>
        <input type="datetime-local" name="duedate">
        <br>

        <label>Message:</label>
        <input type="text" name="message">
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Todo">
        <br>
    </form>
    <p><a href="index.php?action=list_todos">Go back to list</a></p>
</main>
<?php include '../view/footer.php'; ?>