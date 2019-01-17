<?php
require_once("../conf.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
</head>
<body>
<style>

    body {
        margin-top: 40px;
        text-align: center;
        font-size: 14px;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    }
        /*
                #calendar {
                    width: 900px;
                    margin: 0 auto;
                }
        */
</style>

<?php
$pec = new C_PhpEventCal();

//==== Setting Properties
$config = array(
    'header'=>array('left'=>'prev,next','center'=>'title','right'=>'month'),
    'editable'=>'false',
    'firstDay'=>'2',
    'height'=>'200'
);

$pec->setConfig($config);

//=====display
$pec->display_array();

?>

</body>
</html>
