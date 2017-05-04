<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 04-May-17
 * Time: 2:50 PM
 *
 * Dummy Class
 */
class TreeBuilder
{
    private $tree = "not got it";
    /**
     * TreeBuilder constructor.
     */
    public function __construct($dir)
    {
        if ($dir == ".") $this->tree = "got it!";
    }

    /**
     * @return string
     */
    public function getTree(): string
    {
        return $this->tree;
    }
}