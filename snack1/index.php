<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, 
 punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
 Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
    $matches = [
         [
            "ospite" => "olimpia milano",
            "casa" => "cantù",
            "punti ospite" => 55,
            "punti casa" => 60
        ],
        [
            "ospite" => "Los Angeles Lakers",
            "casa" => "Chicago Bulls",
            "punti ospite" => 70,
            "punti casa" => 68
        ],
        [
            "ospite" => "Philadelphia",
            "casa" => "Cleveland",
            "punti ospite" => 80,
            "punti casa" => 75
        ],

    ];

  
for ($i = 0; $i < count($matches); $i++) {
    echo $matches[$i]["ospite"]." "."-"." ".$matches[$i]["casa"]." "."|"." ".$matches[$i]["punti ospite"]." "."-"." ".$matches[$i]["punti casa"];
    echo"<br>";
};

// oppure

$i = 0;
while ($i < count($matches)) {
    echo $matches[$i]["ospite"]." "."-"." ".$matches[$i]["casa"]." "."|"." ".$matches[$i]["punti ospite"]." "."-"." ".$matches[$i]["punti casa"];
    echo"<br>";
    $i++;
}

?>

<h1>Prova 2</h1>

<?php

$matches = [
    "partita1" => [
       "ospite" => "olimpia milano",
       "casa" => "cantù",
       "punti ospite" => 55,
       "punti casa" => 60
   ],
   "partita2" => [
       "ospite" => "Los Angeles Lakers",
       "casa" => "Chicago Bulls",
       "punti ospite" => 70,
       "punti casa" => 68
   ],
   "partita3" => [
       "ospite" => "Philadelphia",
       "casa" => "Cleveland",
       "punti ospite" => 80,
       "punti casa" => 75
   ],

];

foreach($matches as $i) {
    foreach($i as $val){
        echo $val."-";  
    }
};





    
        
?>
    
</body>
</html>