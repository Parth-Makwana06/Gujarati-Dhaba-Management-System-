<?php
include('db.php');
?>
<link rel="stylesheet" href="styles.css">
<h1>All Orders</h1>

<div class="container">
<?php
$sql = "SELECT orders.*, menu_items.item_name 
        FROM orders 
        JOIN menu_items ON orders.item_id = menu_items.id
        ORDER BY orders.order_time DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($order = $result->fetch_assoc()) {
        echo "<div class='menu-item'>";
        echo "<strong>".$order['customer_name']."</strong> (Table: ".$order['table_number'].") ordered <strong>".$order['item_name']."</strong> × ".$order['quantity'];
        echo " | ₹".$order['total_price']." on ".$order['order_time'];
        echo "</div>";
    }
} else {
    echo "No orders placed yet.";
}
?>
</div>
