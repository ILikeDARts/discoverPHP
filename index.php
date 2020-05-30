<?php

require_once __DIR__ .'/class-testscenario.php';
require_once __DIR__ .'/json/class-jsontestscenario.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My tests scenarios</title>
    <style>
        .scenario {
            margin: 20px 0;
        }
        .scenario .correct::marker {
            color: green;
        }
        .scenario .incorrect::marker {
            color: red;
        }
    </style>
</head>
<body>
    <?php $TestScenario = new TestScenario(); ?>
    <?php $JsonTestScenario = new JsonTestScenario(); ?>
</body>
</html>