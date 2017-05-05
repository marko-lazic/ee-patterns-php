<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 05-May-17
 * Time: 2:41 PM
 */
require_once "../registry/Registry.php";

class Controller
{
    private $reg;

    private function __construct()
    {
        $this->reg = Registry::instance();
    }

    public static function run()
    {
        $instance = new Controller();
        $instance->init();
        $instance->handleRequest();
    }

    private function init()
    {
        $this->reg->getApplicationHelper()->init();
    }

    private function handleRequest()
    {
        $request = $reg->getRequest();
        $resolver = new CommandResolver();
        $cmd = $resolver->getCommand($request);
        $cmd->execute($request);
    }
}