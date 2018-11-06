<?php



include('database.php');




  


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="JS/ajax1.js"></script>
        
          
         
         
        
        
        
      
    </head>
    <body>
        <main>

            <h1>Address Form</h1>

            <form action="display.php" method="post" id="register_form">

                
                <label>First Name:</label>
                <input type="text" name="first_name" id="fname"><br>

                <label>Last Name:</label>
                <input type="text" name="last_name" id="lname"><br>

                <label>Street Line 1:</label>                
                <input type="text" name="line1" id="sl1"><br>

                <label>Street Line 2:</label>                
                <input type="text" name="line2" id="sl2"><br>
              

                <label>Country:</label> 
                <input type="text" name="country" id="country_search"><br>
                <div id="show_country"></div>

                <div id="county_section" >
                    <label>County:</label>
                    <select name="county" id="county_output">
                        
                    </select><br>
                   
                    
                
                </div>

              
                <div id="town_section">
                    <label>Town:</label>
                    <select name="town" id="town_output">
                        
                    </select><br>
                      
                </div>
                
                <div id="submit_cancel">
                 <label>&nbsp;</label>
                
          
             <input type="submit" value="Send" name="send" id="send">
             <input type="button" value="Cancel" id="cancel">
            </div>
            </form>
        </main>
    </body>
</html>

