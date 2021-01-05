<?php
include 'head.php';

?>

<div>

    <div class="login-form">
        <form action="login_action.php" method="post" style="padding-bottom: 5%; padding-right: 15%; padding-left: 15%;">
            <div class="text-center mb-3">
                <img src="farmer-pngrepo-com.png" class="rounded" alt="..." width="20%">
            </div>
            <h2 class="text-center pb-3">Main Login Form</h2>
            <div class="form-group">
                <input type="text" class="form-controls" name="Username" id="Username" placeholder="User Name(NIC)" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-controls" placeholder="Pawword" name="Pawword" id="Pawword" required="required">
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
            <a href="Former_registration.php">
                <p class="text-right pt-1 text-muted">If you unregistered farmer </p>
            </a>
        </form>

    </div>
</div>

</body>

</html>