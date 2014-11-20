<?php

namespace OpenConext\Component\StokerMetadata\MetadataIndex;

/**
 * Class Entity
 * @package OpenConext\Component\StokerMetadata\MetadataIndex
 */
class Entity
{
    const TYPE_SP = 'sp';
    const TYPE_IDP = 'idp';

    protected static $TYPES = array(self::TYPE_IDP, self::TYPE_SP);

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var array
     */
    public $types = array();

    /**
     * @var string
     */
    public $displayNameNl;

    /**
     * @var string
     */
    public $displayNameEn;

    /**
     * @param $entityId
     * @param array $types
     * @param $displayNameEn
     * @param $displayNameNl
     */
    public function __construct($entityId, array $types, $displayNameEn, $displayNameNl)
    {
        $this->displayNameEn = $displayNameEn;
        $this->displayNameNl = $displayNameNl;
        $this->entityId     = $entityId;
        $this->types        = $types;
    }
}
