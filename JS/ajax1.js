//document.ready  JavaScript will be active right after the browser will load this file
$(document).ready(function () {
    //hide all the divs
    $('#county_section').hide();
    $('#town_section').hide();
    $('#submit_cancel').hide();


    //keypress(), detects if somebody is typing anything in the field
    $("#country_search").keypress(function () {
        //show list of countries
        $("#show_country").show();

        //After the  display is changed the JavaScript will assign the whole data from the HTML field to the text variable 
        var text = $(this).val();
        //creating ajax object
        $.ajax({
            //method is post
            type: 'POST',
            // send the data to another PHP file 
            url: 'search.php',
            //data to send
            data: {country: text},
            success: function (data) {
                //send data to show_country on html page
                $("#show_country").html(data);

            }

        });



        //keyup - when keyboard is released whne searching for a country
        $('#country_search').keyup(function () {

            // If value in country text box is   empty
            if ($(this).val().length == 0) {
                // Hide the elements
                $('#show_country').hide();
                $('#county_section').hide();
                $('#town_section').hide();
                $('#submit_cancel').hide();
            }
        });

        //when button is clicked it will clear the form
        $("#cancel").click(function () {
            $("#fname:text,#lname:text,#sl1:text,#sl2:text,#country_search:text").val('');
            $('#county_section').hide();
            $('#town_section').hide();
            $('#submit_cancel').hide();

        });



    });

    //script starts when an element in the list is clicked
    $(document).on('click', 'li', function () {
        //country is the element on the list that is clicked
        var country = $(this).text();
        //inserts country into text box
        $("#country_search:text").val(country);
        //hide the list of countries
        $("#show_country").hide();


        //display county section
        $('#county_section').show();

        $.ajax({
            type: 'POST',
            url: 'selectCounty.php',
            data: {'country': country},
            success: function (data) {
                $("#county_output").html(data);


            }

        });






    });

    //script starts when county is selected
    $(document).on('change', '#county_output', function () {

        //display town section
        $('#town_section').show();

        //county is the value that is selected from options
        var county = $(this).val();

        $.ajax({
            type: 'POST',
            url: 'selectTown.php',
            data: {'county': county},
            success: function (data) {
                $("#town_output").html(data);


            }

        });

    });

    //when town is selected
    $(document).on('change', '#town_output', function () {
        //display submit & cancel buttons
        $('#submit_cancel').show();

    });

});