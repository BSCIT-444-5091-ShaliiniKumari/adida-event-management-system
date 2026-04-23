<?php
include("../includes/auth.php");
include("../config/db.php");

$admin_name = $_SESSION['admin_name'] ?? 'Admin';

$result = $conn->query("SELECT * FROM customers ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Customers | Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f7fb;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, #0d6efd, #6610f2);
            color: #fff;
            padding: 25px 18px;
        }

        .sidebar h3 {
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 12px 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: 0.3s;
            font-weight: 500;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: rgba(255, 255, 255, 0.18);
        }

        .main-content {
            padding: 25px;
        }

        .topbar {
            background: #fff;
            border-radius: 16px;
            padding: 18px 22px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.06);
            margin-bottom: 25px;
        }

        .page-title h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            color: #212529;
        }

        .page-title p {
            margin: 4px 0 0;
            color: #6c757d;
        }

        .content-card {
            background: #fff;
            border: none;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            padding: 22px;
        }

        .table thead th {
            background: #f8f9fa;
            border-bottom: none;
            font-size: 14px;
            white-space: nowrap;
        }

        .table td, .table th {
            vertical-align: middle;
        }

        .address-box {
            min-width: 180px;
            max-width: 260px;
            white-space: normal;
            word-break: break-word;
        }

        .empty-state {
            text-align: center;
            padding: 30px 0;
            color: #6c757d;
        }

        @media (max-width: 991px) {
            .sidebar {
                min-height: auto;
            }
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 sidebar">
            <h3>Admin Panel</h3>
            <a href="dashboard.php">Dashboard</a>
            <a href="enquiries.php">Enquiries</a>
            <a href="bookings.php">Bookings</a>
            <a href="customers.php" class="active">Customers</a>
            <a href="services.php">Services</a>
            <a href="logout.php">Logout</a>
        </div>

        <div class="col-lg-10 main-content">
            <div class="topbar d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div class="page-title">
                    <h2>All Customers</h2>
                    <p>Welcome, <?php echo htmlspecialchars($admin_name); ?>. View and manage all customer records here.</p>
                </div>
                <a href="dashboard.php" class="btn btn-primary px-4">Back to Dashboard</a>
            </div>

            <div class="content-card">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($result && $result->num_rows > 0): ?>
                                <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                        <td><?php echo htmlspecialchars($row['city']); ?></td>
                                        <td class="address-box"><?php echo nl2br(htmlspecialchars($row['address'])); ?></td>
                                        <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7" class="empty-state">No customers found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>