<?php
$nav = "<nav class=\"navbar fixed-top navbar-expand-lg navbar-light bg-white\">
  <a class=\"navbar-brand\" href=\"index.php\"><img  src=\"images/logo_en.png\"></a>
  <button class=\"navbar-toggler m-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse justify-content-lg-end\" id=\"navbarNav\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item m-lg-auto text-md-left\">
        <a class=\"nav-link\" href=\"how-it-works.php\">Kaip tai veikia ?</a>
      </li>
      <li class=\"nav-item m-lg-auto text-md-left\">
        <a class=\"nav-link\" href=\"duk.php\">D.U.K</a>
      </li>
      <li class=\"nav-item m-lg-auto text-md-left\">
        <a class=\"nav-link\" href=\"contact.php\">Contact</a>
      </li>
      <li class=\"nav-item ml-lg-5 m-lg-auto text-md-left\">
        <a class=\"nav-link\" href=\"#\">Prisijungti</a>
      </li>
      <li class=\"nav-item m-lg-auto\">
      <button class='btn btn-primary m-lg-auto px-3 nav-link text-white'>Registruotis</button>
      </li>
    </ul>
  </div>
</nav>

<nav class=\"nav-cities\">
    <a href=\"#\">VNO</a>
    <a href=\"#\">KUN</a>
    <a href=\"#\">PLQ</a>
</nav>";
echo $nav;
