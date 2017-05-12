<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 10-May-17
 * Time: 3:20 PM
 */
abstract class Request
{
    protected $properties;
    protected $feedback = [];
    protected $path = "/";

    public function __construct()
    {
        $this->init();
    }

    abstract public function init();

    public function setPath(string $path)
    {
        $this->path = $path;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getProperty(string $key)
    {
        if (isset($this->properties[$key])) {
            return $this->properties[$key];
        }
        return null;
    }

    public function setProperty(string $key, $val)
    {
        $this->properties[$key] = $val;
    }

    public function addFeedback(string $msg)
    {
        array_push($this->feedback, $msg);
    }

    public function getFeedback(): array
    {
        return $this->feedback;
    }

    public function getFeedbackString($separator = "\n"): string
    {
        return implode($separator, $this->feedback);
    }

    public function clearFeedback()
    {
        $this->feedback = [];
    }
}