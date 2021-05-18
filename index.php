<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    
<?php 
/*Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite
di basket di un’ipotetica tappa del calendario.Ogni array della partita avrà una squadra
di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla 
squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */

$matches = [
    [
        "squadraCasa" => "Brindisi",
        "squadraOpstite" =>"Dinamo Sassari",
        "puntiCasa"=>"54",
        "puntiOspite"=>"56",
    ],
   [
        "squadraCasa" =>"Cremona",
        "squadraOpstite" =>"Reggiana",
        "puntiCasa"=>"72",
        "puntiOspite"=>"65",
    ],
     [
        "squadraCasa" =>"Olimpia Milano",
        "squadraOpstite" =>" Cantù",
        "puntiCasa"=>"55",
        "puntiOspite"=>"60",
    ],
    [
        "squadraCasa" =>"Varese",
        "squadraOpstite" =>"Trento",
        "puntiCasa"=>"63",
        "puntiOspite"=>"68",
    ],
     [
        "squadraCasa" =>"Cantù",
        "squadraOpstite" =>"Olimpia Milano",
        "puntiCasa"=>"71",
        "puntiOspite"=>"89",
    ],
];
 ?>
<h1>Partite</h1>
       
<?php for ($i = 0; $i < count($matches); $i++) { ?>
    <div>Partita 
     <?php echo $i+1 ?> : <?php echo $matches[$i]['squadraCasa'] ?> -
     <?php echo $matches[$i]['squdraOspite'] ?> |
     <?php echo $matches[$i]['puntiCasa'] ?> -
     <?php echo $matches[$i]['puntiOspite'] ?>
     </div>
<?php } ?>

<hr>
<?php
/*PHP Snack 2:
Passare come parametri GET (query string) name, mail e age
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri
2. che mail contenga un punto e una chiocciola
3. che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/ 
?>

</body>
</html>