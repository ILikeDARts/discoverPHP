<?php

require_once __DIR__ .'/class-testscenario.php';

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
        .scenario .correct {
            color: green;
        }
        .scenario .incorrect {
            color: red;
        }
    </style>
</head>
<body>
    <?php $TestScenario = new TestScenario(); ?>
</body>
</html>