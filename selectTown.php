<?php

include('database.php');
//get county id
$county = filter_input(INPUT_POST, 'county');
$query = 'SELECT `id` FROM `counties` WHERE name = :county'; 
$statement = $db->prepare($query);
$statement->bindValue(':county', $county);
$statement->execute();
$county_id = $statement->fetchColumn();
$statement->closeCursor();

//get towns
$query2 = 'SELECT * FROM `towns` WHERE `countyID` = :county_id';
$statement2 = $db->prepare($query2);
$statement2->bindValue(':county_id', $county_id);
$statement2->execute();
$towns = $statement2->fetchAll();
$statement2->closeCursor();


             foreach ($towns as $town) :
                 echo'<option value="'. $town['townName'].'"id="select_town">';
     
                    echo $town['townName'] ;
                    
                    echo'</option>';
                
             endforeach;
           



