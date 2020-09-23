<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function hr(){
        echo '<hr/>';
    }
    require_once "class/phrase.php";
    require_once "class/feux.php";
    require_once "class/joueur.php";
    require_once "class/yeti.php";
    require_once "class/yeti2.php";
    // rendu phrase 1
    $phrase1= new Phrase("Jean eudes a 10 ans aujourd'hui");
    $phrase1->set_italic(true);
    $phrase1->set_italic(false);
    echo $phrase1->render();

    // rendu phrase 2 sans chainage
    $p2= new Phrase("Ce petit chat a volé un poisson");
    $p2->set_bold(true);
    $p2->set_underline(true);
    echo $p2->render();

    // rendu phrase 3
    $p3= new Phrase("Ma twingou est bluge");
    $p3->set_italic(true);
    echo $p3->render();


    // rendu phrase 2 avec chainage des setters
    $p2->set_bold(true)->set_underline(true);
    echo $p2->render();
    hr();
$f1= new Feu();
$f1->set_etat(Feu::ORANGE);
$f1->get_show();
$f1->set_etat(Feu::ROUGE);
$f1->get_show();

hr();
new Joueur("pedro",105);
new Joueur("antoine",180);
echo Joueur::get_teamWeight();
new Joueur("guy", 160);
new Joueur("george", 155);
new Joueur("gregory", 165);
new Joueur("michel", 95);
new Joueur("etienne", 125);
echo Joueur::get_teamWeight();
new Joueur("guillaume",85);
hr();
$george= new Yeti("george");
$maturin = new Yeti("maturin");
$bigfoot = new Yeti("bigfoot");
$garbu = new Yeti("garbu");
$garbu->set_tribe("TRIBU DE GARBU");
$george->set_tribe("ouloulou");
$maturin->set_tribe("ouloulou");
$george->whatYourname($garbu);
//var_dump($george);
$maturin->whatYourName($george);
$bigfoot->set_tribe($george->get_tribe());
$bigfoot->whatYourName($george);
hr();
$georgerpg= new Yetirpg("george");
var_dump($georgerpg);







    ?>
</body>

</html>