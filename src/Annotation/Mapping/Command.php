<?php

namespace Swoft\Console\Annotation\Mapping;

use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;

/**
 * The annotation of command
 *
 * @Annotation
 * @Target("CLASS")
 * @Attributes(
 *     @Attribute("name", type="string")
 *     @Attribute("alias", type="string")
 * )
 */
class Command
{
    /**
     * Command group name
     *
     * @var string
     */
    private $name = '';

    /**
     * Command group name alias
     *
     * @var string
     */
    private $alias = '';

    /**
     * @var bool
     */
    private $enabled = true;

    /**
     * @var bool
     */
    private $coroutine = true;

    /**
     * Command constructor.
     *
     * @param array $values
     */
    public function __construct(array $values)
    {
        if (isset($values['value'])) {
            $this->name = (string)$values['value'];
        } elseif (isset($values['name'])) {
            $this->name = (string)$values['name'];
        }

        if (isset($values['alias'])) {
            $this->alias = (string)$values['alias'];
        }

        if (isset($values['coroutine'])) {
            $this->coroutine = $values['coroutine'];
        }

        if (isset($values['enabled'])) {
            $this->enabled = (bool)$values['enabled'];
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
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }
}
