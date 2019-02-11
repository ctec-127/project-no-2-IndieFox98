<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>
<body>
    <?php
        require "header.html";
    ?>
    <section>
        <br>
        <h2 class="centered"><strong>Build Your Furry Self!</strong></h2>
        <?php
            if (isset($_GET['form'])) {
                echo '<p class="centered">Please fill out form below.</p><br>';
                require "form.html";
                echo '<br>';
            } else {
                echo '<p class="centered">Follow instructions below.</p><br>';
                echo '<p>This particular generator has been designed to teach fellow PHP beginners about URL parameters.
                These show up in the URL when submitting data using the GET method. In order to understand URL parameters,
                we ask that you enter them in yourself to see the desired result.</p>
                <p class="centered">Here is the syntax: ?parameter1=value1&amp;parameter2=value2...</p><br>
                <p>The set of URL parameters goes at the <strong>very end</strong> of the URL string. For this tutorial,
                there are <strong>seven</strong> URL parameters to focus on, several with limited values. Here is the list
                (<strong>parameter name</strong>: values).</p>
                <ul><li><strong>animal</strong>: "fox", "lynx", "raccoon"</li>
                <li><strong>attitude</strong>: "caustic", "exuberant", "hotheaded"</li>
                <li><strong>name</strong>: any value</li><li><strong>word</strong>: any value</li>
                <li><strong>bmonth</strong> (birth month): 01-12 (double digits recommended)</li>
                <li><strong>bdate</strong> (birth date): 01-31 (double digits recommended)</li>
                <li><strong>byear</strong> (birth year): 1900-2019 (preferred range)</li>
                </ul><br>
                <p>To get the gist of it, here\'s an example. I recommend you copy and paste this. <strong>NOTE</strong>: The file
                for this web page is "<strong>page1.php</strong>". To witness the result, change it to "<strong>page2.php</strong>".</p>
                <p class="centered">?animal=fox&amp;attitude=caustic&amp;name=Randy&amp;word=car&amp;bmonth=10&amp;bdate=04&amp;byear=1988</p><br>
                <p>Congratulations! You now know how to make a fursona using URL parameters!</p><br>
                <p>Still overwhelmed? You can opt to use a form instead by clicking "GO TO FORM" below.</p><br>
                <a href="page1.php?form">GO TO FORM</a><br>';
            }
        ?>
    </section>
    <?php
        require "footer.html";
    ?>
<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>