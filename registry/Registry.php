<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 04-May-17
 * Time: 2:02 PM
 */
class Registry
{
    private static $instance = null;
    private $values = [];

    private function __construct()
    {
    }

    public static function instance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get(string $key)
    {
        if (isset($this->values[$key])) {
            return $this->values[$key];
        }

        return null;
    }

    public function set(string $key, $value)
    {
        $this->values[$key] = $value;
    }
}

