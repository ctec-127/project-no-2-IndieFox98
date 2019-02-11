<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<body>
    <?php
        require "header.html";
    ?>
    <section>
        <?php
            // check for missing url parameters
            $required = ['animal', 'attitude', 'name', 'word', 'bmonth', 'bdate', 'byear'];
            $errors = [];
            for ($i=0; $i < count($required); $i++) { 
                if (!isset($_GET[$required[$i]]) or empty($_GET[$required[$i]])) {
                    $errors[count($errors)] = $required[$i];
                }
            }

            // execute if none of the required url parameters are missing
            if (count($errors) == 0) {
                $animal = $_GET['animal'];
                $attitude = $_GET['attitude'];
                $name = $_GET['name'];
                $word = $_GET['word'];
                $bmonth = $_GET['bmonth'];
                if ($bmonth < 1) {
                    $bmonth = 1;
                } else if ($bmonth > 12) {
                    $bmonth = 12;
                }
                $bdate = $_GET['bdate'];
                if ($bdate < 1) {
                    $bdate = 1;
                } else if ($bdate > 31) {
                    $bdate = 31;
                }
                $byear = $_GET['byear'];
                if ($byear < 1900) {
                    $byear = 1900;
                } else if ($byear > 2019) {
                    $byear = 2019;
                }
                $dob = new DateTime($byear . '-' . $bmonth . '-' . $bdate);
                $today = new DateTime();
                $age = $today->diff($dob)->y;
                echo '<br><h2 class="centered"><strong>Introducing your new fursona, ' . $name . ' the ' . $animal . '!</strong></h2><br>';
                switch ($animal) {
                    case 'fox':
                        echo '<img src="img/red-fox-14939022938mj.jpg" /><br>';
                        break;
                    case 'lynx':
                        echo '<img src="img/bobcat-1516716737EBL.jpg" /><br>';
                        break;
                    case 'raccoon':
                        echo '<img src="img/raton-laveur-4.jpg" /><br>';
                        break;
                    default:
                        echo '<p class="centered">Image of ' . $animal . ' is not available.</p><br>';
                        break;
                }
                switch ($attitude) {
                    case 'caustic':
                        echo '<p';
                        if (isset($_GET['comic'])) {
                            echo ' class="comic"';
                        }
                        echo '>Hey. My name is ' . $name . '. The world currently wasted ' . $age . ' years of my life. I shouldn\'t
                        really have to mention this but I am a ' . $animal . '. I hate it when people ask me if I am a ' . $animal .
                        '. I would be like, "No, of course not! In fact, I happen to be a ' . $word . ' disguised as a ' . $animal .
                        '." More often than I would hope, people would believe my sarcastic reply because they\'re stupid like that.</p>';
                        break;
                    case 'exuberant':
                        echo '<p';
                        if (isset($_GET['comic'])) {
                            echo ' class="comic"';
                        }
                        echo '>Oh, <em>hiiii!</em> How you doin\'? I am ' . $name . ' the ' . $animal . '! ¡Yo tengo ' . $age . ' años,
                        eyyyy! Are you having a good day? Let me tell you a little about myself. I am a ' . $animal . ' who likes ' .
                        $word . '! I also like to play the ' . $word . ', eat ' . $word . ', speak ' . $word . ', and breathe ' . $word .
                        '! Oops, sorry. Didn\'t mean to get too excited. Hehe.</p>';
                        break;
                    case 'hotheaded':
                        echo '<p';
                        if (isset($_GET['comic'])) {
                            echo ' class="comic"';
                        }
                        echo '>Howdy! My name is ' . $name . '! Don\'t call me a ' . $animal . ' because that\'s insulting to
                        me and my mother! Plus, I\'m ' . $age . '! What in blazes are doing here anyway?! You best get out of my way
                        or I\'ll send the cops after you for invasion of privacy! Unless you give me ' . $word . ' this instant!
                        Then I\'ll forgive your insolent bottom! Yes, I have to end all my sentences in exclamation marks. Because
                        that\'s how I am, you ' . $word . '!</p>';
                        break;
                    default:
                        echo '<p class="centered">The ' . $attitude . ' attitude is not available.</p>';
                        break;
                }
            } else {
                echo '<br><p class="centered">The following URL parameters are missing:</p>';
                for ($i=0; $i < count($errors); $i++) { 
                    echo '<p class="centered">' . $errors[$i] . '</p>';
                }
                echo '<br><p>GLaDOS: "You\'ve managed to corrupt the Fursona Generator with your epic lack of competence. Congratulations."</p>';
            }
        ?>
        <br>
        <a href="page1.php">START OVER</a>
        <br>
        <a href="page1.php?form">START OVER WITH FORM</a>
        <br>
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