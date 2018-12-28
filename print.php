<?php
class OL {
    public static function print($str_input) {
        echo($str_input);
    }
}

echo('Hello World' . PHP_EOL);
OL::print('Hello World' . PHP_EOL);