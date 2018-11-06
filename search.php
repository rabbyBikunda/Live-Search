<?php

//php function that takes the text from country text box
function search($text) {

    include 'database.php';


    //data sent from ajax1 file
    $country = filter_input(INPUT_POST, 'country');
    $query = "SELECT country FROM countries WHERE country LIKE concat('%', :country, '%')"; //characters before and after %
    $statement = $db->prepare($query);
    $statement->bindValue(':country', $country);
    $statement->execute(array('country' => $text)); //key is 'country' value is $text
    
    //returns a row from the result set. The parameter PDO::FETCH_ASSOC tells PDO to return the result as an associative array.
    while ($countries = $statement->fetch(PDO::FETCH_ASSOC)) 
    {
        // display each country in a list
        echo '<ul><li>' . $countries['country'] . '</li></ul>';
    }
}

// call the search function with the data sent from Ajax
search(filter_input(INPUT_POST, 'country'));
