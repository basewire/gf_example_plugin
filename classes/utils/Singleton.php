<?php

namespace GfExamplePlugin;

/**
 * Class Singleton
 * @package ShamansDirectory
 */
abstract class Singleton
{
    /**
     * Instance of this class
     *
     * @var Singleton
     */
    static $instance;

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
    }

    /**
     * Get instance
     *
     * @return static
     */
    final static public function getInstance()
    {
        static $instance = null;

        return $instance ?: $instance = new static;
    }

    /**
     * Magic method prevent cloning of the instance of the Singleton instance
     */
    final private function __clone()
    {
    }

    /**
     * Magic method prevent unserializing of the Singleton instance.
     */
    final private function __wakeup()
    {
    }
}
