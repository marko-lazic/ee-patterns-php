<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 12-May-17
 * Time: 8:25 AM
 */
class DefaultCommand extends Command
{

    public function doExecute(Request $request)
    {
        $request->addFeedback("Welcome to WOO");
        include(__DIR__ . "/main.php");
    }
}