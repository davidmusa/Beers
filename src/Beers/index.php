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

    <title>Document</title>
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
        console.log(word_input);
    }
        

</script>

</html>