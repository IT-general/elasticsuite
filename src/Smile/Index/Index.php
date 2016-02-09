<?php

namespace Smile\ElasticSuiteCore\Index;

use Smile\ElasticSuiteCore\Api\Index\IndexInterface;
use Smile\ElasticSuiteCore\Api\Index\IndexSettingsInterface;
use Smile\ElasticSuiteCore\Api\Index\TypeInterface;

class Index implements IndexInterface
{
    /**
     * Index identifier.
     *
     * @var string
     */
    private $identifier;

    /**
     * Name of the index.
     *
     * @var string
     */
    private $name;

    /**
     * Index types.
     *
     * @var \Smile\ElasticSuiteCore\Api\Index\TypeInterface[]
     */
    private $types;

    /**
     *
     * @param string $identifier Index real name.
     * @param string $name       Index real name.
     * @param array  $aliases    Index current aliases.
     */
    public function __construct($identifier, $name, array $types)
    {
        $this->identifier = $identifier;
        $this->name  = $name;
        $this->types = $types;
    }

    /**
     * @inheritdoc
     * @see \Smile\ElasticSuiteCore\Api\Index\IndexInterface::getIdentifier()
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @inheritdoc
     * @see \Smile\ElasticSuiteCore\Api\Index\IndexInterface::getName()
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     * @see \Smile\ElasticSuiteCore\Api\Index\IndexInterface::getTypes()
     */
    public function getTypes()
    {
        return $this->types;
    }

}