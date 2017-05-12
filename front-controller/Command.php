<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 09-May-17
 * Time: 8:25 AM
 */
abstract class Command
{
    final public function __construct()
    {

    }

    public function execute(Request $request)
    {
        $this->doExecute($request);
    }

    abstract public function doExecute(Request $request);
}