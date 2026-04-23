<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Event Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .login-wrapper {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }

        .login-card {
            background: #fff;
            border: none;
            border-radius: 18px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.18);
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: #fff;
            text-align: center;
            padding: 30px 20px;
        }

        .login-header h3 {
            margin: 0;
            font-weight: 700;
        }

        .login-header p {
            margin: 8px 0 0;
            font-size: 14px;
            opacity: 0.95;
        }

        .login-body {
            padding: 30px 25px;
        }

        .form-control {
            height: 48px;
            border-radius: 10px;
        }

        .btn-login {
            height: 48px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 16px;
        }

        .bottom-text {
            text-align: center;
            margin-top: 18px;
            font-size: 14px;
        }

        .bottom-text a {
            text-decoration: none;
            font-weight: 600;
        }

        .alert {
            border-radius: 10px;
            font-size: 14px;
        }

        @media (max-width: 576px) {
            .login-body {
                padding: 25px 18px;
            }

            .login-header {
                padding: 24px 15px;
            }
        }
    </style>
</head>
<body>

<div class="login-wrapper">
    <div class="card login-card">
        <div class="login-header">
            <h3>Admin Login</h3>
            <p>Sign in to access the admin dashboard</p>
        </div>

        <div class="login-body">
            <?php if (isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif; ?>

            <form action="login_process.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Admin Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter admin email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                </div>

                <div class="d-grid mt-4">
                    <button class="btn btn-primary btn-login" type="submit">Login</button>
                </div>
            </form>

            <div class="bottom-text">
                Don’t have an account? <a href="signup.php">Create Admin Account</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>