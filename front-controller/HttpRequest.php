<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 12-May-17
 * Time: 8:17 AM
 */
class HttpRequest extends Request
{

    public function init()
    {
       $this->properties = $_REQUEST;
       $this->path = $_SERVER['PATH_INFO'];
       $this->path = (empty($this->path)) ? "/" : $this->path;
    }
}