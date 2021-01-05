<?php
include 'head.php';

?>

<div>

    <div class="login-form">
        <form action="add_farmer.php" method="post" style="padding-bottom: 5%;">
            <div class="text-center mb-3">
                <img src="farmer-pngrepo-com.png" class="rounded" alt="..." width="20%">
            </div>
            <h2 class="text-center pb-3">Farmer Registration</h2>
            <div class="form-group">
                <input type="text" class="form-controls" name="name" placeholder="Name" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-controls" maxlength="10" placeholder="NIC (System Login User Name)" name="nic" id="NIC" onkeyup="validateNIC();" required="required">
                <span id="message1"></span>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <input type="date" class="form-controls" name="bod" id="bod" placeholder="BOD" required="required">

                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-controls" name="age" maxlength="3" id="age" placeholder="Age" required="required">

                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <input type="tel" class="form-controls" onkeyup="validatetel();" name="telNum1" id="telNum" maxlength="12" placeholder="Telephone Number" required="required">
                    <span id="messagetelNum"></span>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="tel" class="form-controls" onkeyup="validatetel();" name="telNum2" id="telNum" maxlength="12" placeholder="Home Number" required="required">
                    <span id="messagetelNum"></span>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-controls" name="Address" placeholder="Address" required="required">
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <select class="form-controls text-capitalize" name="province" placeholder="Province" required="required">
                        <?php include 'province.php' ?>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <select class="form-controls text-capitalize" name="District" placeholder="District" required="required">
                        <?php include 'district.php' ?>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <select class="form-controls text-capitalize" name="Farmer_Type" placeholder="Farmer Type" required="required">
                        <option>Farmer Type </option>
                        <option value="Land owner Farmer">Land owner Farmer</option>
                        <option value="Tenant farmer">Tenant farmer</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-controls" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required="required">
            </div>
            <hr class="bg-light mt-5 mt-3" />
            <div class="form-group">
                <div class="form-group">
                    <select class="form-control" name="Farming_type" id="Farming_type">
                        <option>Your Farming Method</option>
                        <option>Arable Farming</option>
                        <option>Mixed Farming</option>
                        <option>Commercial Farming</option>
                        <option>Extensive and Intensive Farming</option>
                        <option>Nomadic Farming</option>
                        <option>Poultry Farming</option>
                        <option>Fish Farming</option>
                    </select>
                </div>
            </div>
            <label>Mainly cultivated crops</label>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <select class="form-controls text-capitalize" name="crops1" placeholder="Select Crop" required="required">
                        <?php include 'crops.php' ?>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <select class="form-controls text-capitalize" name="crops2" placeholder="Select Crop" required="required">
                        <?php include 'crops.php' ?>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <select class="form-controls text-capitalize" name="crops3" placeholder="Select Crop" required="required">
                        <?php include 'crops.php' ?>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <select class="form-controls text-capitalize" name="crops4" placeholder="Select Crop" required="required">
                        <?php include 'crops.php' ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <textarea class="form-control" name="More_Crops" placeholder="More Crops" rows="3"></textarea>
            </div>
            <hr class="bg-light mt-5 mt-3" />
            <div class="form-group">
                <input type="password" class="form-controls" name="password" placeholder="password" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-controls" name="Cpassword" placeholder="Cpassword" required="required">
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit Details</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function validateNIC() {
        var nic = document.getElementById('NIC');
        var mesg = document.getElementById('message1');

        if (NIC.length != 14) {
            message1.innerHTML = "111111111V IS Valid NIC Type";
        } else {
            message1.innerHTML = "Length is good";
        }
    }
</script>
<script>
    function validateAge() {
        var age = document.getElementById('age');
        var mesg = document.getElementById('messageage');

        if (age.length != 2) {
            messageage.innerHTML = "Valid Age Range : 18 - 70";
        } else {
            messageage.innerHTML = "Valide Age";
        }
    }
</script>
<script>
    function validatetel() {
        var telNum = document.getElementById('telNum');
        var telNum = document.getElementById('messagetelNum');

        if (age.length != 2) {
            messagetelNum.innerHTML = "Valid Telephone Number Pattern Is : 071-78-89-609";
        } else {
            messagetelNum.innerHTML = "Valide Age";
        }
    }
</script>
</body>

</html>