<!DOCTYPE html>
    <html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Customer Login</title>
                <link rel="stylesheet" href="style.css">
        </head>
<body> 
    <section>
    

        <div class="login-container">
            <h1>Car Wash</h1><br><br> 
            <form action="register.php" method="post">
            Name: <input type="text" name="name_cust" id="name"><br><br>
            <!--Phone: <input type="text" name="phone_cust" id="phone"><br><br> "to be developed" --> 
            Email: <input type="text" name="email_cust" id="email"><br>
            
                <p>Select washing type:</p>
                <p>Simple wash $60.00
                <input type="radio" name="wash_type" value="Simple"></p>    
                <p>Full wash $100.00
                <input type="radio" name="wash_type" value="Full"></p>
                <p>Detailed wash $200.00
                <input type="radio" name="wash_type" value="Detailed"> </p><br>    

                <p>Wax:</p>
                Yes: <input type="radio" name="wax" id="yes" value="Yes" > 
                No: <input type="radio" name="wax" id="no" value="No" ><br><br><br>
                

                    <!--<select name="time" id="time">
                        <option>Wash Time</option>
                        <option value="9am">09:00AM</option>
                        <option value="11am">11:00AM</option>
                        <option value="1pm">1:00PM</option>
                        <option value="3pm">3:00PM</option>
                        <option value="5pm">5:00PM</option>
                    </select><br>-->

                    <br><input type="submit" value="Save" class="return-button">
                    <a class="return-button" href="index.php">Return</a> 
            </form>
            
           
        </div>
            <div id="report"></div>
            <!--<br><br><a class="return-button" href="index.php">Return</a>-->
    </section>                
        
</body>
<script src="script.js"></script>
    </html>