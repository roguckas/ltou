<?php
$nav = "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand js-scroll-trigger\" href=\"index.php\">
        <img  src=\"images/logo_en.png\"></a>
        <button class=\"navbar-toggler m-auto\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"fas fa-bars\"></span>
        </button>
        <div class=\"collapse navbar-collapse row justify-content-xl-end\" id=\"navbarResponsive\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"how-it-works.php\">Kaip tai veikia ?</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"duk.php\">D.U.K</a>
                </li>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"contact.php\">Kontaktai</a>
                </li>
                <li class='pl-lg-5 ml-lg-5'>
                    <a class=\"nav-link\" href=\"#\">Prisijungti</a>
                </li>
                <li>
                <button class='btn-primary m-auto'>
                    <a class=\"nav-link text-white p-1\" href=\"#\">Registruotis</a>
                </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class=\"nav-cities\">
    <a href=\"#\">VNO</a>
    <a href=\"#\">KUN</a>
    <a href=\"#\">PLQ</a>
</nav>
";
echo $nav;
