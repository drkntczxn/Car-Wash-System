<?php
include "connection.php";

$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM customer
WHERE id_cust=$id");
$row = mysqli_fetch_assoc($result);
?>

<form action="update.php" method="post">
    <inpput type="hidden" name="id"
    value="<?php echo $row['id_cust']; ?>"><br>
    Name: <input type="text" name="name"
    value="<?php echo $row['name_cust']; ?>"><br>
    Email: <input type="text" name="email"
    value="<?php echo $row['email_cust']; ?>"><br>

    <p>Select washing type:</p>
        <p>Simple wash $60.00
        <input type="radio" name="wash_type" value="Simple"
        <?php if ($row ['wash_type'] == "Simple") echo "checked"; ?>></p>    
        <p>Full wash $100.00
        <input type="radio" name="wash_type" value="Full"
        <?php if ($row ['wash_type'] == "Full") echo "checked"; ?>></p>
        <p>Detailed wash $200.00
        <input type="radio" name="wash_type" value="Detailed"
        <?php if ($row ['wash_type'] == "Detailed") echo "checked"; ?>></p><br>

        <p>Wax:</p>
                Yes: <input type="radio" name="wax" id="yes" value="Yes"
                <?php if ($row ['wax'] == "yes") echo "checked"; ?>>  
                No: <input type="radio" name="wax" id="no" value="No"
                <?php if ($row ['wax'] == "No") echo "checked"; ?>><br><br><br>
</form>