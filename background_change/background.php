<?php
$currentTime = date('H:i:s');
$morningStart = date('H:i:s', strtotime('03:00:00'));
$morningEnd = date('H:i:s', strtotime('11:59:59'));
$afternoonStart = date('H:i:s', strtotime('12:00:00'));
$afternoonEnd = date('H:i:s A', strtotime('16:59:59'));
$eveningStart = date('H:i:s', strtotime('17:00:00'));
$eveningEnd = date('H:i:s', strtotime('19:59:59'));
$nightStart = date('H:i:s', strtotime('20:00:00'));
$nightEnd = date('H:i:s', strtotime('02:59:59'));

$fontColor= 'black';
if($currentTime > $morningStart && $currentTime < $morningEnd)
{
    $image='./images/morning.png';
}
else if($currentTime > $afternoonStart && $currentTime < $afternoonEnd)
{
    $image='./images/afternoon.png';
}
else if($currentTime > $eveningStart && $currentTime < $eveningEnd)
{
    $image='./images/evening.png';
}
else
{
    $image='./images/night.png';
    $fontColor= 'silver';
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Background Change</title>

        <style>
            div{
                width:'100%';
                height: 91vh;
                background-image: url(<?=$image?>);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            h1{
                position: relative;
                top: 10px;
                left: 10px;
                color: <?=$fontColor?>
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Hello!</h1>
        </div>
    </body>
</html>
