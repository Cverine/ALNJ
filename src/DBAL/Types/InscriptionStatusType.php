<?php


namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

class InscriptionStatusType extends AbstractEnumType
{
    public const ON_DEMAND = 'on demand';
    public const VALIDATED = 'validated';
    public const REJECTED  = 'rejected';

    protected static $choices = [
        self::ON_DEMAND => 'on demand',
        self::VALIDATED => 'validated',
        self::REJECTED  => 'rejected',
    ];
}