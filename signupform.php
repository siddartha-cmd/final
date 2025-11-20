<?php 
$title = "Final - Sign Up Form";
include 'includes/header.php'; 
?>

<div class="row">
    <form action="signup.php" method="POST" class="row g-3">
        <div class="col-md-6">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">User Name</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            <small id="message"></small>
        </div>
        <div class="col-12">
            <label class="form-label">Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="col-md-4">
            <label class="form-label">City</label>
            <input type="text" class="form-control" name="city">
        </div>
        <div class="col-md-4">
            <label class="form-label">Province</label>
            <select class="form-select" name="province">
                <option selected>Choose...</option>
               <option>Alberta</option>
      <option>British Colombia</option>
      <option>Manitoba</option>
      <option>New Brunswick</option>
      <option>Newfoundland and Labrador</option>
      <option>Northwest Territories</option>
      <option>Nova Scotia</option>
      <option>Nunavut</option>
      <option>Ontario</option>
      <option>Prince Edward Island</option>
      <option>Quebec</option>
      <option>Saskatchewan</option>
      <option>Yukon</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Postal Code</label>
            <input type="text" class="form-control" name="postal_code">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
        </div>
    </form>
</div>

<script src="js/passwordcheck.js"></script>

<?php include 'includes/footer.php'; ?>