<?php
// Start session and check authentication
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../auth/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin Panel</title>
    <link rel="stylesheet" href="../css/admin-style.css">
</head>
<body>
    <div class="admin-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Admin Panel</h2>
            </div>
            <nav class="sidebar-nav">
                <a href="dashboard.php" class="active">Dashboard</a>
                <a href="manage-projects.php">Manage Projects</a>
                <a href="manage-skills.php">Manage Skills</a>
                <a href="manage-certificates.php">Certificates</a>
                <a href="settings.php">Settings</a>
                <a href="../auth/logout.php">Logout</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="header">
                <h1>Dashboard</h1>
                <p>Welcome back, Admin!</p>
            </div>

            <!-- Dashboard Cards -->
            <div class="dashboard-cards">
                <div class="card">
                    <h3>Total Projects</h3>
                    <p>12</p>
                </div>
                <div class="card">
                    <h3>Skills</h3>
                    <p>8</p>
                </div>
                <div class="card">
                    <h3>Certificates</h3>
                    <p>5</p>
                </div>
                <div class="card">
                    <h3>Messages</h3>
                    <p>3</p>
                </div>
            </div>

            <!-- Recent Projects Table -->
            <div class="table-container">
                <div class="table-header">
                    <h2>Recent Projects</h2>
                    <a href="manage-projects.php?action=add" class="btn btn-primary">Add New Project</a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Project One</td>
                            <td>Web Development</td>
                            <td>2023-10-01</td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <!-- More projects will be dynamically loaded here -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
