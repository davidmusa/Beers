<?php

    /*
    *
    *
    *
    */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">

    <title>Jokes For You</title>
</head>
<body>
    <div id=inside_container>
        <div id="request_info">Please request word to respond joke</div>
        <input type="text" id="input_word" placeholder="Write word to receive Joke">
        <button id="request_joke" onclick="joke_request()">GET JOKES</button>
    </div>
    <div id="output_container">Get Your Jokes Here!</div>
</body>

<script>

    function joke_request(){

        var word_input = document.getElementById("input_word").value;
        var endpoint = "https://v2.jokeapi.dev/joke/pun";
        var request_endpoint = endpoint + "?contains=" + input_word;

        var output = "";

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                output = JSON.parse(xhttp.responseText);

                var number_of_jokes = output.length
                document.getElementById("output_container").innerHTML = "There is " + number_of_jokes + " jokes found!";

            for (var i = 0; i < number_of_jokes; i++) {
                var setup = output[i]['setup'];
                var delivery = output[i]['delivery'];
                var joke = output[i]['joke'];
                
                var output_html = "<div class='joke_table'>" + setup + " > " + delivery + " > " + joke + "</div><br><br>";

                var number_of_joke = joke.length;
                var jokes_found = "";
                for (var j = 0; j < number_of_joke; j++) {
                    jokes_found = joke[j];
                    output_html += jokes_found + "<br><br>";
                }

                var currentHTML = document.getElementById("output_container").innerHTML;
                currentHTML += output_html;

                document.getElementById("output_container").innerHTML = currentHTML;

            }

        }
    };

    xhttp.open("GET", requested_enpoint, true);
    xhttp.send();

    }    

</script>

</html>