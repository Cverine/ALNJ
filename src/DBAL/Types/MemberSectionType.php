<?php


namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

final class MemberSectionType extends AbstractEnumType
{
    public const CHILD_NOVE     = 'Enfant Nove-Josserand';
    public const ADULT_NOVE     = 'Adulte Nove-Josserand';
    public const CHILD_EXT      = 'Enfant extérieur';
    public const ADULT_EXT      = 'Adulte extérieur';
    public const OTHER_SECTION  = 'Autre';

    protected static $choices = [
        self::CHILD_NOVE    => 'Enfant Nove-Josserand',
        self::ADULT_NOVE    => 'Adulte Nove-Josserand',
        self::CHILD_EXT     => 'Enfant extérieur',
        self::ADULT_EXT     => 'Adulte extérieur',
        self::OTHER_SECTION => 'Autre'
    ];
}