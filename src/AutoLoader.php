<?php

namespace Swoft\Console;

use Swoft\Console\Router\Router;
use Swoft\Helper\ComposerJSON;
use Swoft\SwoftComponent;

/**
 * class AutoLoader
 * @since 2.0
 * @package Swoft\Console
 */
class AutoLoader extends SwoftComponent
{
    /**
     * Get namespace and dirs
     *
     * @return array
     */
    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }

    /**
     * Metadata information for the component
     *
     * @return array
     */
    public function metadata(): array
    {
        $jsonFile = \dirname(__DIR__) . '/composer.json';

        return ComposerJSON::open($jsonFile)->getMetadata();
    }

    public function coreBean(): array
    {
        return [
            'consoleRouter' => [
                'class' => Router::class,
            ],
        ];
    }
}
