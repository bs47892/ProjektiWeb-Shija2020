<?php include("includes/header.php"); ?>
<!--ketu fillon slideri-->
<div class="slider">
    <dic class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">


        <div class="slide first">
            <img src="images/7.jpg" alt="">
        </div>
        <div class="slide">
            <img src="images/6.jpg" alt="">
        </div>
        <div class="slide">
            <img src="images/3.jpg" alt="">
        </div>
        <div class="slide">
            <img src="images/4.jpg" alt="">
        </div>
        <dic class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>


        </dic>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>

        </div>
</div>
<script type="text/javascript">
    var counter = 1;
    setInterval(function() {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 4) {
            counter = 1;
        }
    }, 5000);
</script>
<!--ketu perfundon slideri-->
<!--ketu fillon text box sllogani-->
<div class="sllogani">
    <h1>Ne, servojmë shije!</h1>
</div>
<!--ketu perfundon text box sllogani-->
<!--specialiteti-->
<div class="specialiteti">
    <img src="images/download.jpg">
    <h1>Specialiteti ynë</h1>
    <p>Specialiteti ynë: Salmoni me përbërës organik, dhe sos special nga hudhra, spinaqi dhe
        <br>domatet e thara. Është shije për të cilën shumica e klientëve tanë na vizitojnë.
    </p>
</div>
<!--/specialiteti-->
<!--ketu fillon fotoja e lokacionit e lokacionit-->
<div class="lokacioni">

    <img src="images/Untitled-1.png">
    <h1>Prandaj, eja na vizito edhe ti!</h1>
    <p>Lokacioni:
        <br><i class="fa fa-map"></i> Rruga: "Bill Klinton", nr:19, 10000 Prishtinë
        <br><i class="fa fa-phone"></i> +383 44 111 111
    </p>

</div>
<!--ketu perfundon fotoja e lokacionit-->
