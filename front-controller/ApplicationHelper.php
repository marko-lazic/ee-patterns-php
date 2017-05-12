<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 08-May-17
 * Time: 8:06 AM
 */
class ApplicationHelper
{
    private $config = __DIR__ . "/data/woo_options.ini";
    private $reg;

    public function __construct()
    {
        $this->reg = Registry::instance();
    }

    public function init()
    {
        $this->setupOptions();

        if (isset($_SERVER['REQUEST_METHOD'])) {
            $request = new HttpRequest();
        } else {
            $request = new ClieRequest();
        }

        $this->reg->setRequest($request);
    }

    private function setupOptions()
    {
        if (!file_exists($this->config)) {
            throw new AppException("Could not find options file");
        }

        $options = parse_ini_file($this->config, true);

        $conf = new Conf($options['config']);
        $this->reg->setConf($conf);

        $commands = new Conf($options['commands']);
        $this->reg->setCommands($commands);
    }

}