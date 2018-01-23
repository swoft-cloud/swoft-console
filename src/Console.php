<?php

namespace Swoft\Console;

use Swoft\App;
use Swoft\Console\Bean\Collector\CommandCollector;
use Swoft\Console\Style\Style;

/**
 * 命令行
 *
 * @uses      Application
 * @version   2017年10月06日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class Console implements ConsoleInterface
{
    /**
     * the id of console
     *
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
     * run command
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
     * @return int
     */
    public static function id()
    {
        return self::$id;
    }

    /**
     * init
     */
    private function init()
    {
        self::$id = uniqid();
    }

    /**
     * register mapping
     */
    private function registerMapping()
    {
        /* @var \Swoft\Console\Router\HandlerMapping $route */
        $route = App::getBean('commandRoute');

        $commandMapping = CommandCollector::getCollector();
        $route->register($commandMapping);
    }
}
