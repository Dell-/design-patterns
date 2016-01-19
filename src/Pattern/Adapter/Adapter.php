<?php
namespace Pattern\Adapter;

use Pattern\Adapter\External\Library\Api;

/**
 * Class Adapter
 */
class Adapter
{
    public function start()
    {
        Api::start();
    }

    public function end()
    {
        Api::end();
    }

    public function call()
    {
        Api::call();
    }
}
