<html>
<head>
    <title> Stud-o-BOT - The Batangas State University Chatbot </title>
    <link rel="shortcut icon " type="image/x-icon" href="favicon.png"/>
    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/1.9.0/showdown.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/chatbot.js"></script>
    <script src="js/lightslider.js"></script>
    <link rel="stylesheet" href="css/chatbot.css" type="text/css">
    <link rel="stylesheet" href="css/lightslider.css" type="text/css">
    <base target="_blank">
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-76380861-2', 'auto');
        ga('send', 'pageview');

    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#lightSlider").lightSlider();
        });
    </script>
    
    <script type= "text/javascript">
        function RefreshPage(){
            if (confirm("Are you sure, You want to reload?")){
                location.reload();
            }
        } 
    </script>
</head>
<body class="fontStyle">
<img src="css/full.png" width="100%"height="101%"/>
<div class="topbar container-fluid" id="chat-text" style="background: transparent">
<form>
    <span style="width:100%;" id="inputSpan">
        <input class="inputbox"
               placeholder="Say Hi to start conversation..." id="message" name="date" value="" x-webkit-speech style="left: 5px">
        <input class="submit" type="submit" value="Submit">
        <input class="button" type="button" value="Reload" onclick="RefreshPage()">
    </span>
</form>
<?php
$event = '';
if (isset($_GET["course"])){
    $event = $_GET['course'];
}
$sessionID = bin2hex(random_bytes(16));
?>
<span style="display: none;" id="sessionId">
        <?php
        echo $sessionID;
        ?>
<span style="display: none;" id="course">
        <?php
        echo $event;
        ?>
</span>
</span>
</body>
</html>
