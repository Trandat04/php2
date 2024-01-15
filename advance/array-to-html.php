<?php
$array = [
    ['name' => 'Tran Cong A',  'age' => 18],
    ['name' => 'Tran Cong B',  'age' => 19],
    [
        'name' => 'Tran Cong C',
        'age' => 30,
        'points' => [
            'web2' => 10,
            'PHP2' => 9
        ],
    ],

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Points</th>
        </tr>
        <?php foreach ($array as $item) : ?>
            <tr>
                <td><?= $item['name']  ?></td>
                <td><?= $item['age'] ?></td>
                <td>
                    <?php if (isset($item['points'])) : ?>
                        <ul>
                            <?php foreach ($item['points'] as $subject => $points) : ?>
                                <li><?= $subject . ':' . $points ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>