<?php
    class PingPongGenerator
    {
        function makePingPong($input_number)
        {
            $number = 1;
            $output = "";
            while ($number <= $input_number){
                if ($number % 15 === 0) {
                    $output .= 'ping-pong';
                }
                elseif ($number % 3 === 0) {
                    $output .= 'ping';
                }
                elseif ($number % 5 === 0) {
                    $output .= 'pong';
                }
                else {
                    $output .= $number;
                }
                if ($number < $input_number) {
                    $output .= " ";
                }
                ++$number;
            }
            return $output;
        }
    }
?>
