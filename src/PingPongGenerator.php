<?php
    class PingPongGenerator
    {
        function makePingPong($input_number)
        {
            $number = 1;
            $outputArray = array();
            while ($number <= $input_number){
                if ($number % 15 === 0) {
                    array_push($outputArray, 'ping-pong');
                }
                elseif ($number % 3 === 0) {
                    array_push($outputArray, 'ping');
                }
                elseif ($number % 5 === 0) {
                    array_push($outputArray, 'pong');
                }
                else {
                    array_push($outputArray, $number);
                }
                ++$number;
            }
            return $outputArray;
        }
    }
?>
