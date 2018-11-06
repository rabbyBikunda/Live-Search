<?php
include('database.php');


$country = filter_input(INPUT_POST, 'country');
$query = 'SELECT `id` FROM `countries` WHERE country = :country'; //get id of country
$statement = $db->prepare($query);
$statement->bindValue(':country', $country);
$statement->execute();
//only fetch one column 
$country_id = $statement->fetchColumn();
$statement->closeCursor();

//get counties
$query2 = 'SELECT * FROM `counties` WHERE `country_id` = :country_id';
$statement2 = $db->prepare($query2);
$statement2->bindValue(':country_id', $country_id);
$statement2->execute();
$counties = $statement2->fetchAll();
$statement2->closeCursor();


          
               //loop through array of counties as a value named county  and display county name as option
             foreach ($counties as $county) :
                 echo'<option value="'. $county['name'].'"id="select_county">';
     
                    echo $county['name'] ;
                    
                    echo'</option>';
                
             endforeach;
            
             
            
          



