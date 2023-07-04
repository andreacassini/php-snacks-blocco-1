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
    <ul>
        <?php foreach ($array_matches as $match) { ?>
            <li><?php echo $match['match'] . ' ' . $match['results']; ?></li>
        <?php } ?>
    </ul>
</body>

</html>