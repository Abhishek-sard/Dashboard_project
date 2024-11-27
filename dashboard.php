<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Management Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            color: white;
            padding: 15px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .container {
            display: flex;
            margin: 20px;
        }
        .sidebar {
            width: 200px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .sidebar a {
            display: block;
            padding: 10px;
            color: #333;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #f0f0f0;
        }
        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            background-color: #e9ecef;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin: 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="navbar-brand">Sajilo Ticket</a>
            <ul class="navbar-menu">
                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href="logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="sidebar">
            <h2>Bus Management</h2>
            <a href="#">View Buses</a>
            <a href="#">Add Bus</a>
            <a href="#">Edit Bus</a>
            <a href="#">Delete Bus</a>
            <a href="#">Bus Routes</a>
        </div>
        <div class="main-content">
            <h1>Dashboard</h1>
            <div class="card">
                <h3>Total Buses: 20</h3>
            </div>
            <div class="card">
                <h3>Active Routes: 10</h3>
            </div>
            <div class="card">
                <h3>Upcoming Departures: 5</h3>
            </div>
            <div class="card">
                <h3>Maintenance Due: 3 Buses</h3>
            </div>
        </div>
    </div>
</body>
</html>