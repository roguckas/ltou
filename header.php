<?php
$nav = "<nav class=\"navbar pb-3 shadow-sm fixed-top my-auto navbar-expand-lg navbar-light bg-white\">
  <a class=\"navbar-brand\" href=\"index.php\"><img  src=\"images/logo_en.png\"></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse justify-content-lg-end\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item m-lg-auto text-md-left pl-lg-2\">
        <a class=\"nav-link\" href=\"how-it-works.php\">Kaip tai veikia?</a>
      </li>
      <li class=\"nav-item m-lg-auto text-md-left pl-lg-2\">
        <a class=\"nav-link\" href=\"duk.php\">D.U.K</a>
      </li>
 <!--     <li class=\"nav-item m-lg-auto text-md-left pl-lg-2\">
        <a class=\"nav-link\" href=\"contact.php\">Kontaktai</a>
      </li>
      -->
      <li class=\"nav-item m-lg-auto pl-lg-2 pr-lg-3 text-md-left\">
        <a class=\"nav-link\" href=\"https://reklama.ltou.lt/app/building/1#login\">Prisijungti</a>
      </li>
      <li class=\"nav-item m-lg-auto\">
      <button class='btn-primary m-lg-auto px-5 py-2 nav-link text-white'>
        <a class='text-white' href='https://reklama.ltou.lt/app/building/1#register'>Registruotis</a>
      </button>
      </li>
    </ul>
  </div>
</nav>

<nav class=\"nav-cities\">
    <a href=\"https://www.vno.lt/\" target='_blank'>VNO</a>
    <a href=\"https://www.kaunas-airport.lt/\" target='_blank'>KUN</a>
    <a href=\"https://www.palanga-airport.lt/lt/\" target='_blank'>PLQ</a>
</nav>";
echo $nav;
