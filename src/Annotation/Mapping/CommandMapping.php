<?php

namespace Swoft\Console\Bean\Annotation;

use Doctrine\Common\Annotations\Annotation\Target;
use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;

/**
 * The annotation of command mapping
 * @since 2.0
 *
 * @Annotation
 * @Target({"METHOD"})
 * @Attributes(
 *     @Attribute("name", type="string"),
 *     @Attribute("alias", type="string")
 * )
 */
final class CommandMapping
{
    /**
     * Command name
     *
     * @var string
     */
    private $name = '';

    /**
     * Command name alias
     *
     * @var string
     */
    private $alias = '';

    /**
     * Mapping constructor.
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
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }
}