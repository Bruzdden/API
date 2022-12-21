<?php

require "/function.php";

$result = [];
$sum = 0;

$segments = explode("/", parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));

$operation = $segments[1];
$num = $segments[2];

$nums = explode("/", $num);

if (!valid_input($nums)) {
    $result = ["result" => "ERROR INVALID INPUT"];
    echo json_encode($result);
    exit;
}

switch ($operation) {
    case "add":
        foreach ($nums as $num) {
            $sum += $num;
        }
        $result = ["result" => $sum];
        break;
    case "subtract":
        foreach ($nums as $num) {
            $sum -= $num;
        }
        $result = ["result" => $sum];
        break;
    case "times":
        foreach ($nums as $num) {
            $sum *= $num;
        }
        $result = ["result" => $sum];
        break;
    case "divide":
        foreach ($nums as $num) {
            $sum /= $num;
        }
        $result = ["result" => $sum];
        break;
    default:
        $result = ["result" => "ERROR INVALID OPERATION"];
        break;
}

echo json_encode($result);
exit;

