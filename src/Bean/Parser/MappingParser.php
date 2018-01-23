<?php

namespace Swoft\Console\Bean\Parser;

use Swoft\Bean\Parser\AbstractParserInterface;
use Swoft\Console\Bean\Annotation\Mapping;
use Swoft\Console\Bean\Collector\CommandCollector;

/**
 * the parser of mapping
 *
 * @uses      MappingParser
 * @version   2018年01月22日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class MappingParser extends AbstractParserInterface
{
    /**
     * @param string  $className
     * @param Mapping $objectAnnotation
     * @param string  $propertyName
     * @param string  $methodName
     *
     * @return void
     */
    public function parser(string $className, $objectAnnotation = null, string $propertyName = "", string $methodName = "", $propertyValue = null)
    {
        CommandCollector::collect($className, $objectAnnotation, $propertyName, $methodName, $propertyValue);
    }
}