<?php
$title= "Exercise 3: Variable, Strings & Operators";
include 'header.php'; ?>

<h3>Fill this Form Please :D</h3>

<div class="container mt-5">
    <!-- Form Section -->
    <div class="row">
        <div class="col-md-6">
            <form class="form" method="post" action="">
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name:</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="form-group">
                    <lable for="color">Select:</lable>
                    <input type="color" class="form-control" id="color" name="Select" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php
            // Process form data
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                echo "<h3>Hello $firstName $lastName, You are welcome to my site.</h3>";
            }
            ?>
             </div>
<br>
    <!-- PHP Scripts Section -->
    <div class="row mt-5">
        <div class="col-md-6">
            <?php
            // String Variables
            $str1 = "My name is";
            $str2 = "Neeru";
            $stringsum = $str1 . ' ' . $str2;
            echo "<p>Sum of the String is: $stringsum</p>";
            echo "<p>Length of the String: " . strlen($stringsum) . "</p>";
            ?>
        </div>
    </div>
<br>
<hr>
        <div class="col-md-6">
            <?php
            // Number Addition
            $num1 = 298;
            $num2 = 234;
            $num3 = 46;
            $sum = $num1 + $num2 + $num3;
            echo "<p>Sum of Numbers: $sum</p>";
            ?>
        </div>
    </div>
</div>        


<?php 
include 'footer.php';
?>