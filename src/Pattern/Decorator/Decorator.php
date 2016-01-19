<?php
namespace Pattern\Decorator;

/**
 * Class Decorator
 */
class Decorator
{
    public function green(Message $message)
    {
        echo "\033[32m" . $message . "\033[0m" . PHP_EOL;
    }

    public function blue(Message $message)
    {
        echo "\033[34m" . $message . "\033[0m" . PHP_EOL;
    }

    public function red(Message $message)
    {
        echo "\033[31m" . $message . "\033[0m" . PHP_EOL;
    }
}
