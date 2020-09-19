<?php


namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

class MemberRoleType extends AbstractEnumType
{
    public const MEMBER      = 'Membre';
    public const ADHERENT    = 'Adhérent';
    public const ADMIN       = 'Administrateur';
    public const CONTRIBUTOR = 'Intervenant';

    protected static $choices = [
        self::MEMBER      => 'Membre',
        self::ADHERENT    => 'Adhérent',
        self::ADMIN       => 'Administrateur',
        self::CONTRIBUTOR => 'Intervenant',
    ];
}