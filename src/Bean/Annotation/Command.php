<?php

namespace Swoft\Console\Bean\Annotation;

/**
 * the annotation of command
 *
 * @Annotation
 * @Target("CLASS")
 *
 * @uses      Command
 * @version   2018年01月22日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class Command
{
    /**
     * @var string
     */
    private $name = "";

    /**
     * @var bool
     */
    private $coroutine = true;

    /**
     * @var bool
     */
    private $server = false;

    /**
     * Command constructor.
     *
     * @param array $values
     */
    public function __construct(array $values)
    {
        if (isset($values['value'])) {
            $this->name = $values['value'];
        }
        if (isset($values['name'])) {
            $this->name = $values['name'];
        }
        if (isset($values['coroutine'])) {
            $this->coroutine = $values['coroutine'];
        }
        if (isset($values['server'])) {
            $this->server = $values['server'];
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isCoroutine(): bool
    {
        return $this->coroutine;
    }

    /**
     * @return bool
     */
    public function isServer(): bool
    {
        return $this->server;
    }
}