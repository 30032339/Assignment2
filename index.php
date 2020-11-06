<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Home Page</title>
    <style>
        .headings {
            font-color: yellow;
        }
    </style>
  </head>
  <body class="container">
      
      <!-- Just an image -->
        <nav class="navbar navbar-light bg-dark">
            <a class="navbar-brand" href="#">
            <img src="Images/Logo.png" width="400" height="120" alt="" loading="lazy">
            </a>
        </nav>
        <br>


    
    <?php
        $scp = json_decode(file_get_contents('json/scp.json'));
    ?>
    
    <?php foreach($scp as $main=>$display):    ?>
            <div  class="message-content bg-light border border-secondary ">
                <div class="bg-secondary">
                    <br>
                    <h3 class="mb-2" style="color:white; text-align:center;" ><?php echo $display->Page; ?></h3>
                    <br>
                </div>
                    <br>
                    <h4 class="px-4 "><?php echo $display->Item; ?></h4>
                    <h4 class="px-4 ">Containment</h4>
                    <p class="px-4 "><?php echo $display->Containment; ?></p>
                    <div>
                        <h4 class="px-4 ">Description</h4>
                        <p class="px-4 " id="<?php echo $main ?>"><?php echo $display->Description; ?></p></div>
                        <p style="text-align:center;" >
                        <button class="btn btn-secondary" style=" text-align:center;" type="button" onclick="TextToSpeech('<?php echo $main ?>')">Text To Speech</button>
                        </p>
                    </div>
                </div>
                <br><hr><br>
    
    <?php endforeach; ?>
    
    <script>
        function TextToSpeech(text){
            
        const speech = new SpeechSynthesisUtterance();
        let voices = speechSynthesis.getVoices();
        let convert = document.getElementById(text).innerHTML;
        speech.text = convert;
        speech.volume =1;
        speech.rate =1;
        speech.pitch = 1;
        speech.voice = voices[1];
        window.speechSynthesis.speak(speech);
        }
    </script>

    
    
    
    
    
    
    <!-- http://www.scpwiki.com/scp-1092-ru -->
    <!-- http://www.scpwiki.com/scp-1399-ru -->    
<!--    <h1>H<h1>Heading: <?php echo $display->Page; ?></h1>
        <h2>Heading: <?php echo $display->Heading_1; ?></h2>
        <h3>Heading: <?php echo $display->Heading_2; ?></h3>
        <p>Heading: <?php echo $display->Paragraph; ?></p>
    -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src ="app.js"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>