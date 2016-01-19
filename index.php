<?php
require __DIR__ . '/vendor/autoload.php';

// Adapter
$adapter = new Pattern\Adapter\Adapter();

$adapter->start();
$adapter->call();
$adapter->end();
// -----------

// Decorator or Wrapper
$decorator = new \Pattern\Decorator\Decorator();
$message = new \Pattern\Decorator\Message('Test color message!');

$decorator->red($message);
$decorator->blue($message);
$decorator->green($message);
// -----------