<?php
include('db.php');

if (isset($_POST['submit'])) {
    $customer = $_POST['customer'];
    $table_no = $_POST['table_no'];
    $item_id = $_POST['item_id'];
    $qty = $_POST['quantity'];

    $price_result = $conn->query("SELECT price FROM menu_items WHERE id = $item_id");
    $price_row = $price_result->fetch_assoc();
    $total_price = $price_row['price'] * $qty;

    $sql = "INSERT INTO orders (customer_name, table_number, item_id, quantity, total_price, order_time)
            VALUES ('$customer', '$table_no', '$item_id', '$qty', '$total_price', NOW())";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='toast'>Order placed successfully!</div>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<link rel="stylesheet" href="styles.css">
<h1>Place an Order</h1>

<form method="post">
    <input type="text" name="customer" placeholder="Customer Name" required><br>
    <input type="number" name="table_no" placeholder="Table No." required><br>
    <select name="item_id" required>
        <option value="">Select Item</option>
        <?php
        $menu_result = $conn->query("SELECT * FROM menu_items");
        while($menu = $menu_result->fetch_assoc()) {
            echo "<option value='".$menu['id']."'>".$menu['item_name']."</option>";
        }
        ?>
    </select><br>
    <input type="number" name="quantity" placeholder="Quantity" required><br>
    <input type="submit" name="submit" value="Place Order">
</form>
