<?php

$result = [
    "result" => 0,
];


$operation = filter_input(INPUT_GET, "operation");
$nums = explode(",", filter_input(INPUT_GET, "num"));
$sum = 0;

switch($operation)
            {
                case "add":
                    if (count($nums) <= 1){
                        $result = ["result" => "ERROR MORE"];
                        break;
                    }
                    foreach ($nums as $num){
                        if (!is_numeric($num)){
                            $result = ["result" => "NO NUMBER EXIST"];
                            break;
                        }
                        $sum += $num;
                    }
                    $result = ["result" => $sum];
                break;

                case 'subtract':
                    if (count($nums) <= 1){
                        $result = ["result" => "ERROR MORE"];
                        break;
                    }
                    foreach ($nums as $num){
                        if (!is_numeric($num)){
                            $result = ["result" => "NO NUMBER EXIST"];
                            break;
                        }
                        $sum -= $num;
                    }
                    $result = ["result" => $sum];
                break;

                case 'multiply':
                    if (count($nums) <= 1){
                        $result = ["result" => "ERROR MORE"];
                        break;
                    }
                    foreach ($nums as $num){
                        if (!is_numeric($num)){
                            $result = ["result" => "NO NUMBER EXIST"];
                            break;
                        }
                        $sum *= $num;
                    }
                    $result = ["result" => $sum];
                break;

                case 'divide':
                    if (count($nums) <= 1){
                        $result = ["result" => "ERROR MORE"];
                        break;
                    }
                    foreach ($nums as $num){
                        if (!is_numeric($num)){
                            $result = ["result" => "NO NUMBER EXIST"];
                            break;
                        }
                        $sum = $sum / $num;
                    }
                    $result = ["result" => $sum];
                break;

                default:
                    $result = ["result" => "Error more"];
            }
echo json_encode($result);
exit;


?>