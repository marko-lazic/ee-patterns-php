<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 04-May-17
 * Time: 2:51 PM
 *
 * Dummy class
 */
class Conf
{
    private $values = [];

    public function get($key)
    {
        if(isset($this->values[$key])) return $this->values[$key];

        return null;
    }

    public function set($key, $value)
    {
        $this->values[$key] = $value;
    }
}