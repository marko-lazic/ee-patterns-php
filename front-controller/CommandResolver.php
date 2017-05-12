<?php
use MongoDB\Driver\Command;

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 09-May-17
 * Time: 8:13 AM
 */
class CommandResolver
{
    private static $refcmd = null;
    private static $defaultcmd = DefaultCombat::class;

    public function __construct()
    {
        // could make this configurable
        self::$refcmd = new \ReflectionClass(Command::class);
    }

    public function getCommand(Request $request): Command
    {
        $reg = Registry::instance();
        $commands = $reg->getCommands();
        $path = $request->getPath();

        $class = $commands->get($path);

        if (is_null($class)) {
            $request->addFeedback("class '$class' not found");
            return new self::$defaultcmd();
        }

        $refclass = new \ReflectionClass($class);

        if (!$refclass->isSubclassOf(self::$refcmd)) {
            $request->addFeedback("command '$refclass' is not a Command");
            return new self::$defaultcmd();
        }

        return $refclass->newInstance();
    }
}