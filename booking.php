<?php
session_start();
include("header.php");
?>
<div class="container py-5">
    <h2 class="mb-4">Book Our Service</h2>

    <?php
    if (isset($_SESSION['message'])) {
        echo "<div class='alert alert-info'>" . $_SESSION['message'] . "</div>";
        unset($_SESSION['message']);
    }
    ?>

    <form action="booking_process.php" method="POST">
        <div class="row g-3">
            <div class="col-md-6">
                <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
            </div>

            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="col-md-6">
                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
            </div>

            <div class="col-md-6">
                <input type="text" name="city" class="form-control" placeholder="City">
            </div>

            <div class="col-md-12">
                <textarea name="address" class="form-control" placeholder="Address"></textarea>
            </div>

            <div class="col-md-6">
                <select name="service_id" class="form-control" required>
                    <option value="">Select Service</option>
                    <option value="1">Birthday Parties</option>
                    <option value="2">Corporate Events</option>
                    <option value="3">Wedding Meal</option>
                    <option value="4">Bar Service</option>
                    <option value="5">Drop Catering</option>
                    <option value="6">Exhibition</option>
                    <option value="7">Staff Service</option>
                    <option value="8">Trou Packing</option>
                </select>
            </div>

            <div class="col-md-6">
                <input type="date" name="event_date" class="form-control" required>
            </div>

            <div class="col-md-6">
                <input type="text" name="event_time" class="form-control" placeholder="Event Time">
            </div>

            <div class="col-md-6">
                <input type="text" name="event_location" class="form-control" placeholder="Event Location" required>
            </div>

            <div class="col-md-6">
                <input type="number" name="guest_count" class="form-control" placeholder="Guest Count">
            </div>

            <div class="col-md-6">
                <input type="number" step="0.01" name="budget" class="form-control" placeholder="Budget">
            </div>

            <div class="col-md-12">
                <textarea name="special_request" class="form-control" placeholder="Special Request"></textarea>
            </div>

            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit Booking</button>
            </div>
        </div>
    </form>
</div>
<?php include("footer.php"); ?>