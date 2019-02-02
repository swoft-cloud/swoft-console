<?php

namespace Swoft\Console\Bean\Parser;

use Swoft\Annotation\Annotation\Mapping\AnnotationParser;
use Swoft\Annotation\Annotation\Parser\Parser;
use Swoft\Console\Annotation\Mapping\Command;


/**
 * Class CommandParser
 *
 * @since 2.0
 * @package Swoft\Console\Bean\Parser
 *
 * @AnnotationParser(Command::class)
 */
class CommandParser extends Parser
{
    /**
     * @var array
     */
    private static $commands = [];

    /**
     * Parse object
     *
     * @param int    $type Class or Method or Property
     * @param Command $annotationObject Annotation object
     *
     * @return array
     * Return empty array is nothing to do!
     * When class type return [$beanName, $className, $scope, $alias, $size] is to inject bean
     * When property type return [$propertyValue, $isRef] is to reference value
     */
    public function parse(int $type, $annotationObject): array
    {
        // TODO: Implement parse() method.
    }
}
