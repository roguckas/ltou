<?php include 'head.php'?>
<?php  include 'header.php'?>

<header class="bg-primary header text-white">
    <div class="container text-center">
        <div class="row">
            <h1 class="col-12 mb-5"><b>Turite klausimų?</b><br>būtinai atsakysime</h1>
            <p class="col-12">Jei nerandate reikiamų atsakymų, susisiekite su mumis +370 000 000 00 arba elektroniniu paštu info@orouostai.lt</p>
        </div>
    </div>
</header>

<div class="container col-8 mt-5 pt-5 ">
    <ul class="row text-left duk-list">
        <li class="col-12 align-self-center pb-5 duk-list-item">
            <h3 class="d-inline-block ">Ar ekranai veikia nakties metu?</h3>
            <br>
            <p class="text-left">Taip, visi reklaminiai ekranai ir šviesdėžės veikia 24 val. per parą, 7 dienas per savaitę. </p>
        </li>
        <li class="col-12 align-self-center pb-5 duk-list-item">
            <h3 class="d-inline-block">Ar ekranai apsaugoti nuo įsilaužėlių, kurie galėtų juos išjungti ar pakeisti rodomą informaciją? </h3>
            <br>
            <p class="text-left">Taip, ekranuose rodomas turinys yra pasiekiamas tik per oro uosto valdomą serverį</p>
        </li>
        <li class="col-12 align-self-center pb-5 duk-list-item">
            <h3 class="d-inline-block">Kokiu formatu turiu paruošti reklamą ekranams ar šviesdėžėms?</h3>
            <br>
            <p class="text-left">Išsamius reikalavimus galite parsisiųsti čia: nuoroda į PDF su reikalavimais</p>
        </li>
        <li class="col-12 align-self-center pb-5 duk-list-item">
            <h3 class="d-inline-block">Kiek laiko trunka reklamos derinimas? </h3>
            <br>
            <p class="text-left">Paprastai reklamos turinį suderinti trunka 1-2 darbo dienas, jei nekyla problemų dėl kalbos klaidų, neetiško turinio ir pan.
            </p>
        </li>
        <li class="col-12 align-self-center pb-5 duk-list-item">
            <h3 class="d-inline-block">Ar yra reklamų, kurios negalimos oro uoste?</h3>
            <br>
            <p class="text-left">Reklamas oro uostuose transliuojame laikydamiesi Lietuvos įstatymų, tad kas galima kitur, galima ir pas mus su keliomis išimtimis. Pirma išimtis – dėl oro uosto specifikos čia negalima ginklų, fejerverkų, sprogmenų ir panaši reklama. Antra išimtis – oro uostuose negalima politinė reklama.</p>
        </li>
        <li class="col-12 align-self-center pb-5 duk-list-item">
            <h3 class="d-inline-block">Kokia kalba turi būti parengtos reklamos? </h3>
            <br>
            <p class="text-left">Visos reklamos turi būti parengtos lietuvių kalba, arba dviem kalbomis – lietuvių ir bet kokia užsienio kalba.</p>
        </li>
        <li class="col-12 align-self-center pb-5 duk-list-item">
            <h3 class="d-inline-block">Kiek laiko trunka sutarties derinimas ir pasirašymas? Ar ji būtina?</h3>
            <br>
            <p class="text-left">Sutarties derinimas ir pasirašymas trunka 1-2 savaites. Sutartis nėra būtina, jei reklamos kampanija apmokama iš anksto pagal išankstinę sąskaitą faktūrą.</p>
        </li>
        <li class="col-12 align-self-center pb-5 duk-list-item">
            <h3 class="d-inline-block">Ar galima pakeisti reklamos turinį jau prasidėjus kampanijai?</h3>
            <br>
            <p class="text-left">Žinoma! Naują turinį galima pateikti per sistemą, o jį patvirtinus – paleisti per ekranus ar pakeisti fizinę reklamą oro uoste. Pastaruoju atveju gali būti papildomų išlaidų dėl naujos reklamos priemonės gamybos.</p>
        </li>
    </ul>
</div>
<footer>
    <div class="col-12 footer-bottom"></div>
</footer>

<script>
    $(".duk-list-item p").hide();

    $( document ).ready(function() {

        if ($(".duk-list-item p")) {
            $(".duk-list-item").click(function () {
                $(".duk-list-item").index(this);
                $(this).children(".text-left").slideToggle(300);
                $(this).children(".duk-list li:before").toggleClass("fa-minus");
            });
        }
    });

</script>

</body>