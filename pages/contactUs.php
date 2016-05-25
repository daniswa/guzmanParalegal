





<?php
    session_start();
?>
<!DOCTYPE html>
<html lang='en-US'>
<head>
    <title>Guzman Paralegal Services - About Us</title>
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
                <div id='map'>
                    <iframe id='googleMap' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.8432791408145!2d-118.53424928478103!3d34.20148048056552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c29a2abe6ef0f3%3A0x8978d491ff94ce33!2sGuzman+Paralegal+Services!5e0!3m2!1sen!2sus!4v1463762044276' allowfullscreen></iframe>
                    <p class='title'>Contacto:</p>
                    <p>18035 Sherman Way Suite 10</p>
                    <p>Reseda, CA 91335</p><br>
                    <p>Tel&#233;fono: (818)776-9717</p>
                    <p>Fax: (818)776-9040</p><br>
                    <p>Email: 1anaguzman@gmail.com</p><br>
                    <p class='title'>Horas:</p>
                    <p>Lunes: 9:00AM - 5:00PM</p>
                    <p>Martes: 9:00AM - 5:00PM</p>
                    <p>Mi&#233;rcoles: 9:00AM - 5:00PM</p>
                    <p>Jueves: 9:00AM - 5:00PM</p>
                    <p>Viernes: 9:00AM - 5:00PM</p>
                    <p>Sabado: CERRADO</p>
                    <p>Domingo: CERRADO</p>
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
                <div id='map'>
                    <iframe id='googleMap' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.8432791408145!2d-118.53424928478103!3d34.20148048056552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c29a2abe6ef0f3%3A0x8978d491ff94ce33!2sGuzman+Paralegal+Services!5e0!3m2!1sen!2sus!4v1463762044276' allowfullscreen></iframe>
                    <p class='title'>Contact:</p>
                    <p>18035 Sherman Way Suite 10</p>
                    <p>Reseda, CA 91335</p><br>
                    <p>Phone: (818)776-9717</p>
                    <p>Fax: (818)776-9040</p><br>
                    <p>Email: 1anaguzman@gmail.com</p><br>
                    <p class='title'>Hours:</p>
                    <p>Monday: 9:00AM - 5:00PM</p>
                    <p>Tuesday: 9:00AM - 5:00PM</p>
                    <p>Wednesday: 9:00AM - 5:00PM</p>
                    <p>Thursday: 9:00AM - 5:00PM</p>
                    <p>Friday: 9:00AM - 5:00PM</p>
                    <p>Saturday: CLOSED</p>
                    <p>Sunday: CLOSED</p>
                </div>
            </section>";
            include 'footer.php';
        }
    ?>