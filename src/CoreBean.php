<?php

namespace Swoft\Console;

use Swoft\Bean\Annotation\BootBean;
use Swoft\Console\Router\HandlerMapping;
use Swoft\Core\BootBeanIntereface;

/**
 * The core bean of console
 *
 * @BootBean(server=true)
 */
class CoreBean implements BootBeanIntereface
{
    public function beans()
    {
        return [
            'commandRoute' => [
                'class' => HandlerMapping::class,
            ],
        ];
    }
}