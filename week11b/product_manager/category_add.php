<?php include '../view/header.php'; ?>
    <main>
        <h2>Add Category</h2>
        <!-- add code for form here -->
        <form action="index.php" method="post" id="add_category_form">
            <input type="hidden" name="action" value="add_category">

            <label>Category Name:</label>
            <input type="text" name="name" />
            <br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Category" />
            <br>
        </form>

        <p><a href="index.php?action=list_categories">List Categories</a></p>
    </main>
<?php include '../view/footer.php'; ?>