<?php
//$_GET
//query string = page2.php?name=<?= $cars["name"];

$cars = [
    [
        "name" => "GR Supra",
        "engine" => "Inline 6 Cylinder, 3.0 L Turbocharged",
        "power" => "340 HP",
        "torque" => "500 Nm",
        "image" = > "grsupra.jpg"
    ],
    [
        "name" => "GR 86",
        "engine" => "Boxer 4 Cylinder, 2.4 L Naturally-Aspirated",
        "power" => "228 HP",
        "torque" => "250 Nm",
        "image" = > "gr86.jpg"
    ],
    [
        "name" => "GR Yaris",
        "engine" => "Inline 3 Cylinder, 1.6 L Turbocharged",
        "power" => "268 HP",
        "torque" => "360 Nm",
        "image" => "gryaris.jpg"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <ul>
    <h1>Cars Model</h1>
    <?php foreach( $cars ) : ?>
            <li>
                <a href="haldetailprofuk.php?
                name=<?= $cars["name"]; ?>
                &engine=<?= $cars["engine"]; ?>
                &power=<?= $cars["power"]; ?>
                &torque=<?= $cars["torque"]; ?>
                &image=<?= $cars["image"]; ?>
                ">
                <?= $cars["name"]; ?>">
                </a>
            </li>
    <?php endforeach; ?>
    </ul>   
</body>