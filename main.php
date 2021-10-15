<?php 

// $matches = [
//     [
//         'team1' => 'Acqua S.Bernardo Cantù',
//         'team2' => 'Oriora Pistoia',
//         'point_team_1' => 70,
//         'point_team_2' => 45
//     ],
//     [
//         'team1' => 'Fortitudo Pompea Bologna',
//         'team2' => 'Dolomiti Energia Trentino',
//         'point_team_1' => 82,
//         'point_team_2' => 83
//     ],
//     [
//         'team1' => 'Pallacanestro Trieste',
//         'team2' => 'Virtus Roma',
//         'point_team_1' => 72,
//         'point_team_2' => 33
//     ],
//     [
//         'team1' => 'Openjobmetis Varese',
//         'team2' => 'Germani Basket Brescia',
//         'point_team_1' => 101,
//         'point_team_2' => 99
//     ],
//     [
//         'team1' => 'Paglierosi Vincenti',
//         'team2' => 'Contadini Obliteranti',
//         'point_team_1' => 70,
//         'point_team_2' => 45
//     ],
//     [
//         'team1' => 'Cavalieri Multietnici',
//         'team2' => 'Milano nonpropriofortissima',
//         'point_team_1' => 82,
//         'point_team_2' => 83
//     ],
//     [
//         'team1' => 'Pallacanestro Ancona',
//         'team2' => 'Virtus Latina',
//         'point_team_1' => 72,
//         'point_team_2' => 33
//     ],
//     [
//         'team1' => 'Focosoni Varese',
//         'team2' => 'Pascolanti Basket Brescia',
//         'point_team_1' => 101,
//         'point_team_2' => 99
//     ],
// ];

// foreach ($matches as $match) {
//     echo $match['team1'] . '  -  '. $match['team2'] . '  |  ' . $match['point_team_1'] . $match['point_team_2'] . '<br>';
// }

// $name = $_GET;

// if( ( strlen($_GET['name']) > 3 ) && ( strpos($_GET['mail'], '@') !== false ) && ( strpos($_GET['mail'], '.') !== false ) && (is_numeric($_GET['age'])) ){
//     echo 'OK';
// }else{
//     echo 'ERRORE';
// }


// $posts = [

//     '10/01/2019' => [
//         [
//             'title' => 'Post 1',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 1'
//         ],
//         [
//             'title' => 'Post 2',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 2'
//         ],
//     ],
//     '10/02/2019' => [
//         [
//             'title' => 'Post 3',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 3'
//         ]
//     ],
//     '15/05/2019' => [
//         [
//             'title' => 'Post 4',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 4'
//         ],
//         [
//             'title' => 'Post 5',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 5'
//         ],
//         [
//             'title' => 'Post 6',
//             'author' => 'Michele Papagni',
//             'text' => 'Testo post 6'
//         ]
//     ],
// ];


// foreach ($posts as $data => $post){
//     echo '<h3>' . $data . '</h3>' ;
//     foreach($post as $el){
//         echo $el['title'] . '<br>' . $el['author'] . '<br>' . $el['text'] . '<br>';
//     }
// }


// $unique = [];

// while(count($unique) < 15){
//     $ran = rand(1, 50);
//     if(!in_array($ran, $unique)){
//         $unique[] = $ran;
//     }
// }


// var_dump($unique)


// $db = [
//     'teachers' => [
//         [
//             'name' => 'Michele',
//             'lastname' => 'Papagni'
//         ],
//         [
//             'name' => 'Fabio',
//             'lastname' => 'Forghieri'
//         ]
//     ],
//     'pm' => [
//         [
//             'name' => 'Roberto',
//             'lastname' => 'Marazzini'
//         ],
//         [
//             'name' => 'Federico',
//             'lastname' => 'Pellegrini'
//         ]
//     ]
// ];


// $alumns = [
//     [
//         'nome' => 'Marco',
//         'cognome' => 'Pini',
//         'voti' => [2,4,7,9,5,3,5]
//     ],

//     [
//         'nome' => 'Gius',
//         'cognome' => 'Tri',
//         'voti' => [9,5,8,3,3,8,8]
//     ],
// ];

// foreach ($alumns as $alumn){
//     echo $alumn['nome'] . $alumn['cognome'] . 
        // array_sum($alumn['voti']) / count($alumn['voti']) . '<br>';
// }





// $articolo = "Io ascolto da un’ora la trasmissione. Man mano che la sentivo andare avanti mi chiedevo: 'Che cosa ci faccio qua? '. Perché io ho una grandissima stima. nei confronti del giornalismo, ancora più della politica con la p maiuscola e della democrazia. E penso che la democrazia si fondi sul confronto, non sui plotoni d’esecuzione. Quando vedo dei plotoni d’esecuzione dico che sarebbe giusto che si difendessero le persone che poi vengono uccise, ha dichiarato Crosetto. unico ospite in studio a prendere le difese di Giorgia Meloni e del centrodestra. Davanti a lui, la sardina Mattia Santori (ora tra le fila del Pd) e il vicesegretario dem Giuseppe Provenzano. che nei giorni scorsi aveva addirittura definito la leader di Fratelli d’Italia fuori dall’arco democratico. Poco prima, in apertura di trasmissione, aveva preso la parola pure Romano Prodi.";
// $artlExplode = explode('.', $articolo);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- <?php foreach($db['teachers'] as $el){; ?>
        <p class="red" style="background: red"> <?php echo $el['name'] . $el['lastname']; ?></p> <br>
    <?php }; ?>

    <?php foreach($db['pm'] as $el){; ?>
        <p class="green" style="background: green"> <?php echo $el['name'] . $el['lastname']; ?></p> <br>
    <?php }; ?> -->



    <!-- <?php foreach($artlExplode as $p){ ?>
        <p> <?php echo $p; ?></p>
    <?php } ?> -->
    
</body>
</html>