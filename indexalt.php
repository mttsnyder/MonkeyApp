

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MonkeyApp</title>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="../MonkeyApp/Beau/jquery-goal-slider.css" rel="stylesheet" type="text/css">


    <style>
        .container { margin-top:150px;}
    </style>



</head>
<body>
<div class="cssload-container">
    <div class="cssload-whirlpool"></div>

    <div class="jgs__container">
        <div class="jgs__motivational">
            Help us reach <br> our goals.
        </div>
        <div class="jgs__image-container">
            <div class="jgs__percentage-container">
                <span class="jgs__percentage-value"></span>
            </div>
            <div class="jgs__overlay-container">
                <img class="jgs__overlay-image" src="../MonkeyApp/Beau/overlay.jpg" alt="">
            </div>
            <img class="jgs__image-base" src="../MonkeyApp/Beau/original.jpg" alt="">
        </div>
        <div class="jgs__steps-container">
            <div class="jgs__steps-highlighted"></div>
            <div class="jgs__step">
                <span class="jgs__sum-goal">250 000 €</span>
                <span class="jgs__goal">Our first goal</span>
            </div>
            <div class="jgs__step">
                <span class="jgs__sum-goal">500 000 €</span>
                <span class="jgs__goal">Our second goal</span>
            </div>
            <div class="jgs__step">
                <span class="jgs__sum-goal">750 000 €</span>
                <span class="jgs__goal">Our third goal</span>
            </div>
            <div class="jgs__step">
                <span class="jgs__sum-goal">1 000 000 €</span>
                <span class="jgs__goal">Our fourth goal</span>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script src="../MonkeyApp/Beau/jquery-goal-slider.js"></script>
<script type="text/javascript">

    $.ajax({
        type: "POST",
        url: 'dbctest.php',
        data: {},
        success: function (data) {


                $('.jgs__container').goalSlider({
                    percentage: 75,
                    duration: 6023,
                    delay: 3000,
                    slantDegree: 20
                });



            rrr= JSON.parse(data);
            //process data returned from php
            goal=1200;
            currentM=rrr.Magbalance;
            //get current variable values
            ratioM=currentM/goal;
            //calculate ratio
            metM=227*ratioM;
            //apply ratio to max height of thermometer

            }
    });



</script>

</body>
</html>
