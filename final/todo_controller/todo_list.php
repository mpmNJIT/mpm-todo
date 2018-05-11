<?php include '../view/header.php'; ?>
<main>
    <h1>Todo List</h1>
    <section>
        <!-- displays Incomplete tasks -->
        <h2>Incomplete todos</h2>
        <table>
            <tr>
                <th>Date created</th>
                <th>Date due</th>
                <th>Message</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($todos as $todo) : ?>
            <tr>
                <td><?php echo $todo->getCreateddate(); ?></td>
                <td><?php echo $todo->getDuedate(); ?></td>
                <td><?php echo $todo->getMessage(); ?>
                </td>
                <td><form action="." method="post"
                          id="delete_todo_form">
                    <input type="hidden" name="action"
                           value="delete_todo">
                    <input type="hidden" name="todo_id"
                           value="<?php echo $todo->getId(); ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_todo">Add Task Todo</a></p>
    </section>
    <br>
    <section>
        <!-- displays Complete tasks -->
        <h2>Complete todos</h2>
        <table>
            <tr>
                <th>Date created</th>
                <th>Date due</th>
                <th>Message</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($todosdone as $todo) : ?>
                <tr>
                    <td><?php echo $todo->getCreateddate(); ?></td>
                    <td><?php echo $todo->getDuedate(); ?></td>
                    <td><?php echo $todo->getMessage(); ?>
                    </td>
                    <td><form action="." method="post"
                              id="delete_todo_form">
                            <input type="hidden" name="action"
                                   value="delete_todo">
                            <input type="hidden" name="todo_id"
                                   value="<?php echo $todo->getId(); ?>">
                            <input type="submit" value="Delete">
                        </form></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<?php include '../view/footer.php'; ?>