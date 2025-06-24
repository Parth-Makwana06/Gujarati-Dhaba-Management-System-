<?php
include('db.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];

    $sql = "INSERT INTO menu_items (item_name, description, price) VALUES ('$name', '$desc', '$price')";
    if ($conn->query($sql) === TRUE) {
        echo "Item Added Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<link rel="stylesheet" href="styles.css">
<h1>Add New Menu Item</h1>

<form method="post">
    <input type="text" name="name" placeholder="Item Name" required><br>
    <textarea name="description" placeholder="Description"></textarea><br>
    <input type="number" name="price" placeholder="Price" required><br>
    <input type="submit" name="submit" value="Add Item">
</form>
