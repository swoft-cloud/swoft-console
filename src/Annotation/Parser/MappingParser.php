<?php

namespace Swoft\Console\Bean\Parser;

use Swoft\Annotation\Annotation\Parser\Parser;
use Swoft\Console\Bean\Annotation\Mapping;

/**
 * Class MappingParser
 * @since 2.0
 * @package Swoft\Console\Bean\Parser
 */
class MappingParser extends Parser
{
    /**
     * Parse object
     *
     * @param int     $type Class or Method or Property
     * @param Mapping $annotationObject Annotation object
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
