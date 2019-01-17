<?php
    require_once('conf.php');
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calendar Misiune</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
    <!--display_script_include_once_head($bootstrap=false, $fullCalendar=false,$datetimePicker=false,$colorPicker=false,$jqueryUI=false)-->
    <?php C_Core::display_script_include_once_head(true);?>
</head>
<body>
<?php
    require_once(dirname(__FILE__) .'/server/html/login.html.php');
?>
    <!--display_script_include_once_foot($bootstrap=false, $fullCalendar=false,$datetimePicker=false,$colorPicker=false,$jqueryUI=false)-->
    <?php C_Core::display_script_include_once_foot(true);?>
    <?php
        //=====Load Custom JS
        C_Core::display_custom_js('user');
    ?>
</body>
</html>
