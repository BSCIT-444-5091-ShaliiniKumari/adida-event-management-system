<?php
include("../includes/auth.php");
include("../config/db.php");

$admin_name = $_SESSION['admin_name'] ?? 'Admin';

$total_enquiries = $conn->query("SELECT COUNT(*) AS total FROM enquiries")->fetch_assoc()['total'] ?? 0;
$total_bookings  = $conn->query("SELECT COUNT(*) AS total FROM bookings")->fetch_assoc()['total'] ?? 0;
$total_customers = $conn->query("SELECT COUNT(*) AS total FROM customers")->fetch_assoc()['total'] ?? 0;
$total_services  = $conn->query("SELECT COUNT(*) AS total FROM services")->fetch_assoc()['total'] ?? 0;

$recent_enquiries = $conn->query("SELECT id, name, email, subject, status, created_at FROM enquiries ORDER BY id DESC LIMIT 5");
$recent_bookings = $conn->query("
    SELECT b.id, c.full_name, s.service_name, b.event_date, b.booking_status
    FROM bookings b
    INNER JOIN customers c ON b.customer_id = c.id
    INNER JOIN services s ON b.service_id = s.id
    ORDER BY b.id DESC
    LIMIT 5
");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Event Management</title>
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

        .topbar {
            background: #fff;
            border-radius: 16px;
            padding: 18px 22px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.06);
            margin-bottom: 25px;
        }

        .welcome-text h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            color: #212529;
        }

        .welcome-text p {
            margin: 4px 0 0;
            color: #6c757d;
        }

        .stat-card {
            border: none;
            border-radius: 18px;
            padding: 22px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.06);
            color: #fff;
            height: 100%;
        }

        .stat-card h3 {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .stat-card p {
            margin: 0;
            font-size: 15px;
            opacity: 0.95;
        }

        .bg-card-1 {
            background: linear-gradient(135deg, #0d6efd, #3d8bfd);
        }

        .bg-card-2 {
            background: linear-gradient(135deg, #198754, #20c997);
        }

        .bg-card-3 {
            background: linear-gradient(135deg, #fd7e14, #ffc107);
        }

        .bg-card-4 {
            background: linear-gradient(135deg, #6f42c1, #d63384);
        }

        .content-card {
            background: #fff;
            border: none;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            padding: 22px;
            margin-top: 25px;
        }

        .content-card h4 {
            font-weight: 700;
            margin-bottom: 18px;
            color: #212529;
        }

        .table thead th {
            background: #f8f9fa;
            border-bottom: none;
            font-size: 14px;
        }

        .table td, .table th {
            vertical-align: middle;
        }

        .badge-status {
            padding: 8px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-new,
        .status-pending {
            background: #fff3cd;
            color: #856404;
        }

        .status-confirmed,
        .status-closed {
            background: #d1e7dd;
            color: #0f5132;
        }

        .status-cancelled {
            background: #f8d7da;
            color: #842029;
        }

        .status-completed {
            background: #cff4fc;
            color: #055160;
        }

        .main-content {
            padding: 25px;
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
            <a href="dashboard.php" class="active">Dashboard</a>
            <a href="enquiries.php">Enquiries</a>
            <a href="bookings.php">Bookings</a>
            <a href="customers.php">Customers</a>
            <a href="services.php">Services</a>
            <a href="logout.php">Logout</a>
        </div>

        <div class="col-lg-10 main-content">
            <div class="topbar d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div class="welcome-text">
                    <h2>Welcome, <?php echo htmlspecialchars($admin_name); ?></h2>
                    <p>Here is your event management dashboard overview</p>
                </div>
                <a href="logout.php" class="btn btn-danger px-4">Logout</a>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-xl-3">
                    <div class="stat-card bg-card-1">
                        <h3><?php echo $total_enquiries; ?></h3>
                        <p>Total Enquiries</p>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stat-card bg-card-2">
                        <h3><?php echo $total_bookings; ?></h3>
                        <p>Total Bookings</p>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stat-card bg-card-3">
                        <h3><?php echo $total_customers; ?></h3>
                        <p>Total Customers</p>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stat-card bg-card-4">
                        <h3><?php echo $total_services; ?></h3>
                        <p>Total Services</p>
                    </div>
                </div>
            </div>

            <div class="content-card">
                <h4>Recent Enquiries</h4>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($recent_enquiries && $recent_enquiries->num_rows > 0): ?>
                                <?php while ($row = $recent_enquiries->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['subject']); ?></td>
                                        <td>
                                            <span class="badge-status <?php echo ($row['status'] === 'new') ? 'status-new' : 'status-confirmed'; ?>">
                                                <?php echo htmlspecialchars($row['status']); ?>
                                            </span>
                                        </td>
                                        <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="text-center">No enquiries found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="content-card">
                <h4>Recent Bookings</h4>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer</th>
                                <th>Service</th>
                                <th>Event Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($recent_bookings && $recent_bookings->num_rows > 0): ?>
                                <?php while ($booking = $recent_bookings->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo $booking['id']; ?></td>
                                        <td><?php echo htmlspecialchars($booking['full_name']); ?></td>
                                        <td><?php echo htmlspecialchars($booking['service_name']); ?></td>
                                        <td><?php echo htmlspecialchars($booking['event_date']); ?></td>
                                        <td>
                                            <span class="badge-status
                                                <?php
                                                    if ($booking['booking_status'] === 'pending') echo 'status-pending';
                                                    elseif ($booking['booking_status'] === 'confirmed') echo 'status-confirmed';
                                                    elseif ($booking['booking_status'] === 'cancelled') echo 'status-cancelled';
                                                    else echo 'status-completed';
                                                ?>">
                                                <?php echo htmlspecialchars($booking['booking_status']); ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center">No bookings found.</td>
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