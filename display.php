<?php



//values sent  from form 
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$line1 = filter_input(INPUT_POST, 'line1');
$line2 = filter_input(INPUT_POST, 'line2');
$country = filter_input(INPUT_POST, 'country');
$county = filter_input(INPUT_POST, 'county');
$town = filter_input(INPUT_POST, 'town');






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
            
         
        
        
        
      
    </head>
    <body>
        <main>

            <h1>Address Form</h1>
          
             <p> <b><label>First Name:</label></b>   
            <?php echo $first_name ?><br></p>
            
            <p> <b><label>Last Name:</label></b>   
            <?php echo $last_name ?><br></p>
            
             <p><b><label>Street Line 1:</label></b>   
            <?php echo $line1 ?><br></p>
            
             <p><b><label>Street Line 2:</label></b>   
            <?php echo $line2 ?><br></p>
             
             <p><b><label>Country:</label></b>   
            <?php echo $country ?><br></p>
             
              <p><b><label>County:</label></b>   
            <?php echo $county ?><br></p>
              
              <p><b><label>Town:</label></b>   
            <?php echo $town ?><br></p>
             
           

            
        </main>
    </body>
</html>



