<?php
$array_matches = [
    [
        'match' => 'Juventus - Milan',
        'results' => '10 - 12'
    ],
    [
        'match' => 'Roma - Sampdoria',
        'results' => '5 - 8'
    ],
    [
        'match' => 'Napoli - Sassuolo',
        'results' => '10 - 12'
    ],
    [
        'match' => 'Empoli - Lazio',
        'results' => '0 - 2'
    ],
    [
        'match' => 'Roma - Spezia',
        'results' => '2 - 1'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Snack 1</h2>
    <ul>
        <?php foreach ($array_matches as $match) { ?>
            <li><?php echo $match['match'] . ' ' . $match['results']; ?></li>
        <?php } ?>
    </ul>
    <hr>
    <h2>Snack 2</h2>
    <!-- VERIFICA SE ESITONO VALORI NOME, EMAIL, ETA NELLA STESSA VARIABILE $_GET -->
    <?php
    $flag_name = false;
    $flag_eta = false;
    $flag_email = false;
    if (isset($_GET['nome']) && isset($_GET['eta']) && isset($_GET['email'])) {
        //CONTROLLO LUNGHEZZA NOME SUPERIORE A 3
        if (strlen($_GET['nome']) > 3) {
            $flag_name = true;
        }

        //VERIFICO CHIOCCIOLA E PUNTO NELLA MAIL
        if (str_contains($_GET['email'], '@') && str_contains($_GET['email'], '.')) {
            $flag_email = true;
        }

        //VERIFICO CHE ETA SIA UN NUMERO
        if (is_numeric($_GET['eta'])) {
            $flag_eta = true;
        }
    }
    ?>
    <form action="index.php" method="GET">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="eta" placeholder="Età">
        <button type="submit">Invia</button>
    </form>
    <?php if (isset($_GET['nome']) && isset($_GET['eta']) && isset($_GET['email'])) { ?>
        <div>
            <h3>
                <?php if ($flag_email && $flag_eta && $flag_name) {
                    echo 'Accesso riuscito';
                } else {
                    echo 'Accesso negato';
                }
                ?>
            </h3>
        </div>
    <?php } ?>

    <hr>
    <h2>Snack 3</h2>
    <?php

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
    ?>

    <ul>
        <?php foreach ($posts as $key => $post) { ?>
            <li>
                <?php echo $key; ?>
                <ul>
                    <?php foreach ($post as $item) { ?>
                        <li><?php echo $item['title'] . " - " . $item['author'] . " - " . $item['text']; ?></li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
</body>

</html>