<?php

    include 'functions.php';
    
    // process form data if submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $due_date = $_POST['due_date'];
        $return_date = $_POST['return_date'];
    }
?>

<form action="form.php" method="post">
        <!-- Get due date -->
         <input type="date" name="due_date" required>
        <!-- Get return date -->
        <input type="date" name="return_date" required>

        <input type="submit" value="Check Availability">
</form>