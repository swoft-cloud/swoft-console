<?php

namespace Swoft\Console;

use Swoft\App;
use Swoft\Console\Bean\Collector\CommandCollector;

/**
 * Console
 */
class Console implements ConsoleInterface
{
    /**
     * @var int
     */
    private static $id;

    /**
     * Console constructor.
     */
    public function __construct()
    {
        $this->init();
        $this->registerMapping();
    }

    /**
     * @return void
     */
    public function run()
    {
        try {
            /* @var \Swoft\Console\Command $command */
            $command = App::getBean('command');
            $command->run();
        } catch (\Throwable $e) {
            output()->writeln(sprintf('<error>%s</error>', $e->getMessage()), true, false);
            output()->writeln(sprintf('<error>%s</error>', $e->getTraceAsString()), true, true);
        }
    }

    /**
     * get id of console
     *
     * @return int|null
     */
    public static function id()
    {
        return self::$id;
    }

    /**
     * @return void
     */
    private function init()
    {
        self::$id = uniqid('', true);
    }

    /**
     * Register mapping
     *
     * @return void
     */
    private function registerMapping()
    {
        /* @var \Swoft\Console\Router\HandlerMapping $route */
        $route = App::getBean('commandRoute');

        $commandMapping = CommandCollector::getCollector();
        $route->register($commandMapping);
    }
}
