<?php
$title= "Exercise 4: Control flow and loops";
include 'header.php'; ?>



    <h4>Check eligiblity for voting </h4>

        <div class="col-md-6">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age" name="age" required>
                </div>
                <button type="submit" name="btnCheckEligibility" class="btn btn-primary">Check Eligibility</button>
            </form>
             <!--php script for if else statement -->

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnCheckEligibility'])) {
                $name = $_POST['name'];
                $age = $_POST['age'];

                if ($age >= 18) {
                    echo "<p>$name, you are eligible for voting.</p>";
                } else {
                    echo "<p>$name, you are not eligible for voting.</p>";
                }
            } 
            ?>
            
        </div>

        <hr>
        <br>
        <h4> check the current month </h4>
         <!-- php script for Switch statement -->
        
            <?php
            $currentMonth = date("F");

            switch ($currentMonth) {
                case "August":
                    echo "<p>It's August, so it's still holiday.</p>";
                    break;
                default:
                    echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
                    break;
            }
            ?>
    
    <hr>
    <h4>check for loop </h4>
    
    <div class="row mt-5">
        <div class="col-md-6">
        
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="numberForLoop">Enter a number for multiplication table:</label>
                    <input type="number" class="form-control" id="numberForLoop" name="numberForLoop" required>
                </div>
                <button type="submit" name="btnGenerateTable" class="btn btn-primary">Generate Table</button>
            </form>
          <!-- php script for ForLoop -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnGenerateTable'])) {
                $numberForLoop= $_POST['numberForLoop'];
                echo "<p>Multiplication Table for $numberForLoop:</p>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<p>$numberForLoop x $i = " . ($numberForLoop * $i) . "</p>";
                }
            }
            ?>
        </div>
        <hr>
        <h4>check while loop </h4>
        <div class="col-md-6">
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="numberWhileLoop">Enter a number for the while loop:</label>
                    <input type="number" class="form-control" id="numberWhileLoop" name="numberWhileLoop" required>
                </div>
                <button type="submit" name="btnPrintNumbers" class="btn btn-primary">Print Numbers</button>
            </form>
             <!-- php script for while loop -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btnPrintNumbers'])) {
                $numberWhileLoop = $_POST['numberWhileLoop'];
                echo "<p>Numbers from 1 to $numberWhileLoop:</p>";
                $counter = 1;
                while ($counter <= $numberWhileLoop) {
                    echo "<p>$counter</p>";
                    $counter++;
                }
            }
            ?>
        </div>
    </div>

    <h4> check aaray</h4>

     <!-- php script for array -->
    <div class="row mt-5">
        <div class="col-md-6">
            <?php
            $myArray = array("HTML", "CSS", "PHP", "JavaScript");
            echo "<p>Elements of the array:</p>";
            foreach ($myArray as $element) {
                echo "<p>$element</p>";
            }
            ?>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>