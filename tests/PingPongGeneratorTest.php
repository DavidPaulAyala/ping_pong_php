<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makePingPong_count()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //assert
            $this->assertEquals('1 2', $result);
        }
        function test_makePingPong_ping()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 4;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //assert
            $this->assertEquals('1 2 ping 4', $result);
        }
        function test_makePingPong_pong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //assert
            $this->assertEquals('1 2 ping 4 pong', $result);
        }
        function test_makePingPong_pingpong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 15;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //assert
            $this->assertEquals('1 2 ping 4 pong ping 7 8 ping pong 11 ping 13 14 ping-pong', $result);
        }

    }
?>
