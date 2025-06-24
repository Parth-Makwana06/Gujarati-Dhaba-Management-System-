<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gujarati Dhaba Dashboard</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f8efd4;
        color:rgb(29, 111, 112);
        margin: 0;
        padding: 0;
        }

        header {
        background-color: #a05300;
        color: white;
        padding: 20px;
        text-align: center;
        }

        nav {
        background-color: #f3c892;
        padding: 10px;
        text-align: center;
        }
                                
        nav a {
        margin: 0 15px;
        text-decoration: none;
        color: #5c3300;
        font-weight: bold;
        }

        .container {
        padding: 20px;
        }

        .cards {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        }

        .card {
        flex: 1 1 200px;
        background-color: #fff2d8;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .card h3 {
        margin-top: 0;
        }
        footer {
        text-align: center;
        padding: 20px;
        background-color: #f3c892;
        margin-top: 40px;
        }
    </style>
    </head>
    <body>
    <header>
        <h1>📊 Gujarati Dhaba Dashboard</h1>
    </header>

    <nav>
        <a href="dashboard.php">Home</a>
        <a href="view_menu.php">Menu</a>
        <a href="place_order.php">Orders</a>
        <a href="add_item.php">Add item</a>
        <a href="view_orders.php">view_orders</a>
    </nav>

    <div class="container">
        <h2>Welcome Back!</h2>
        <p>Welcome to our Gujarati Dhaba.</p>

        <div class="cards">
        <div class="card">
            <h3>🍽️ Total Dishes</h3>
            <p>14</p>
        </div>
        <div class="card">
            <h3>🧾 Total Orders Today</h3>
            <p>20</p>
        </div>
        <div class="card">
            <h3>💰 Revenue Today</h3>
            <p>₹3,50,000</p>
        </div>
        <div class="card">
            <h3>⭐ Top Dish</h3>
            <p>keri no ras</p>
        </div>
        </div>
    </div>

    <footer>
        &copy; 2025 Gujarati Dhaba. All rights reserved.
    </footer>
    </body>
    </html>
