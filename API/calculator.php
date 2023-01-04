<?php

$result = [];

$pos = $_POST;

$operation = $_REQUEST["url"];
$numbers = $pos['nums']; 


switch ($operation) {
    case "sum":
        if (count($numbers) < 2) {
            $result = ["report" => "ERROR", "result" => "MUSI BYT MINIMALNE DVE CISLA"];
            break;
        }
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        $result = ["report" => "OK", "result" => $sum];
        break;
    case "sub":
        if (count($numbers) < 2) {
            $result = ["report" => "ERROR", "result" => "MUSI BYT MINIMALNE DVE CISLA"];
            break;
        }
        $sub = $numbers[0];
        array_shift($numbers);
        foreach ($numbers as $number) {
            $sub -= $number;
        }
        $result = ["report" => "OK", "result" => $sub];
        break;
    case "mul":
        if (count($numbers) < 2) {
            $result = ["report" => "ERROR", "result" => "MUSI BYT MINIMALNE DVE CISLA"];
            break;
        }
        $mul = $numbers[0];
        array_shift($numbers);
        foreach ($numbers as $number) {
            $mul *= $number;
        }
        $result = ["report" => "OK", "result" => $mul];
        break;
    case "div":
        if (count($numbers) < 2) {
            $result = ["report" => "ERROR", "result" => "MUSI BYT MINIMALNE DVE CISLA"];
            break;
        }
        $div = $numbers[0];
        array_shift($numbers);
        foreach ($numbers as $number) {
            $div /= $number;
        }
        $result = ["report" => "OK", "result" => $div];
        break;
    default:
        $result = ["report" => "ERROR", "result" => "ERROR"]; 
}

echo json_encode($result);
?>
