<?php
namespace Pattern\Decorator;

/**
 * Class Message
 */
class Message
{
    /**
     * @var string
     */
    private $message;

    /**
     * Constructor
     *
     * @param string $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->message;
    }
}
