<?php
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
    <title>Manage Projects - Admin Panel</title>
    <link rel="stylesheet" href="../css/admin-style.css">
</head>
<body>
    <div class="admin-wrapper">
        <?php include '../includes/sidebar.php'; ?>

        <main class="main-content">
            <div class="header">
                <h1>Manage Projects</h1>
                <a href="?action=add" class="btn btn-primary">Add New Project</a>
            </div>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Technologies</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>E-Commerce Website</td>
                            <td>Web Development</td>
                            <td>PHP, MySQL, JavaScript</td>
                            <td>2023-10-01</td>
                            <td>
                                <a href="?action=edit&id=1" class="btn btn-primary">Edit</a>
                                <a href="?action=delete&id=1" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <script src="../js/admin-script.js"></script>
</body>
</html>
