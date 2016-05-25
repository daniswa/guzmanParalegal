





<?php
    session_start();
?>
<!DOCTYPE html>
<html lang='en-US'>
<head>
    <title>Guzman Paralegal Services - Reviews</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel=stylesheet type='text/css' href='stylesheets/styleSheet.css'>
    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <!-- jQuery library -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <!-- Latest compiled JavaScript -->
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='javascript/languagePref.js'></script>
</head>
<body>
    <?php
        include_once 'analyze.php';
        if(isset($_POST['english'])){
            $_SESSION['language'] = 'english';
        }elseif(isset($_POST['spanish'])){
            $_SESSION['language'] = 'spanish';
        }elseif(null == $_SESSION['language']){
            $_SESSION['language'] = 'english';
        }
        if($_SESSION['language'] == 'spanish'){
            include 'headerEsp.php';
            echo "<section>
                <div id='language'>
                    <form action='' method='POST'>
                        <button id='langButton' type='submit' name='english' value='Click To View Site In English'><img id='engButton' src='images/langEnglish0.png'></button>
                    </form>
                </div>
                <hr><br><br>
                <div id='servicesSidebar'>
                    <p class='title'>Nuestros Servicios</p><br>
                    <ul id='services'>
                        <li class='services'><p>Accidentes Automovil&#237;sticos</p></li><br>
                        <li class='services'><p>Inmigraci&#243;n</p></li><br>
                        <li class='services'><p>Desalojos</p></li><br>
                        <li class='services'><p>Divorcio</p></li><br>
                        <li class='services'><p>Eliminaci&#243;n de Antecedentes Penales</p></li><br>
                        <li class='services'><p>Cambio De Nombre</p></li><br>
                        <li class='services'><p>Corporaci&#243;n</p></li><br>
                        <li class='services'><p>De Menor Cuant&#237;a</p></li><br>
                        <li class='services'><p>Preparacion De Impuestos</p></li><br>
                        <li class='services'><p>Cualquiera Y Todos Los Servicios Paralegales</p></li><br>
                    </ul>
                </div>
                <div id='contactSidebar'>
                    <a href='contactUs.php'><p class='title'>Cont&#225;ctenos</p></a><br>
                    <p>(818)776-9717</p><br>
                    <p>18305 Sherman Way Suite 11</p>
                    <p>Reseda, CA 91335</p><br><hr>
                    <p class='title'>S&#237;guenos</p><br>
                    <img class='icons' src='images/iconGoogle.png'>
                    <img class='icons' src='images/iconLinkedIn.png'>
                    <img class='icons' src='images/iconFacebook.png'>
                    <img class='icons' src='images/iconTwitter.png'>
                </div>
            </section>";
            include 'footerEsp.php';
        }else{
            include 'header.php';
            echo "<section>
                <div id='language'>
                    <form action='' method='POST'>
                        <button id='langButton' type='submit' name='spanish' value='Haga Clic Para Ver El Sitio En Espa&#241;ol'><img id='spanButton' src='images/langSpanish0.png'></button>
                    </form>
                </div>
                <hr><br><br>
                <div id='servicesSidebar'>
                    <p class='title'>Our Services</p><br>
                    <ul id='services'>
                        <li class='services'><p>Car Accidents</p></li><br>
                        <li class='services'><p>Immigration</p></li><br>
                        <li class='services'><p>Evictions</p></li><br>
                        <li class='services'><p>Divorce</p></li><br>
                        <li class='services'><p>Expungements</p></li><br>
                        <li class='services'><p>Name Change</p></li><br>
                        <li class='services'><p>Corporation</p></li><br>
                        <li class='services'><p>Small Claims</p></li><br>
                        <li class='services'><p>Tax Preparation</p></li><br>
                        <li class='services'><p>Any and all Paralegal Services</p></li><br>
                    </ul>
                </div>
                <div id='contactSidebar'>
                    <a href='contactUs.php'><p class='title'>Contact Us</p></a><br>
                    <p>(818)776-9717</p><br>
                    <p>18305 Sherman Way Suite 11</p>
                    <p>Reseda, CA 91335</p><br><hr>
                    <p class='title'>Follow Us</p><br>
                    <img class='icons' src='images/iconGoogle.png'>
                    <img class='icons' src='images/iconLinkedIn.png'>
                    <img class='icons' src='images/iconFacebook.png'>
                    <img class='icons' src='images/iconTwitter.png'>
                </div>
            </section>";
            include 'footer.php';
        }
    ?>
</body>
</html>