<?php include 'view\header.php'; ?>
<main>
    <h1>To Do Items</h1>

    <section>

        <table>

            <tr>

                <th>Title</th>

                <th>Description</th>

                <th>Category</th>

            </tr>

        <?php foreach ($items as $item) : ?>

            <tr>

                <td><?php echo $item['Title']; ?></td>
                <td><?php echo $item['Description']; ?></td>
                <td><?php echo $item['categoryID']; ?></td>
                <td><form action="." method="post" name="action" value="delete_item">
                    <input type="hidden" name="item_id" value="<?php echo $item['ItemNum']; ?>">
                    <input type="submit" value="Delete">
                </form></td>

            </tr>

        <?php endforeach; ?>

        </table>

        <a href="?action=show_add_form">Add Item</a>

    </section>

</main>

<?php include 'view\footer.php'; ?>


