<?php


namespace App\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

class GradeType extends AbstractEnumType
{
    public const PS  = 'petite section';
    public const MS  = 'moyenne section';
    public const GS  = 'grande section';
    public const CP  = 'CP';
    public const CE1 = 'CE1';
    public const CE2 = 'CE2';
    public const CM1 = 'CM1';
    public const CM2 = 'CM2';

    protected static $choices = [
        self::PS  => 'petite section',
        self::MS  => 'moyenne section',
        self::GS  => 'grande section',
        self::CP  => 'CP',
        self::CE1 => 'CE1',
        self::CE2 => 'CE2',
        self::CM1 => 'CM1',
        self::CM2 => 'CM2',
    ];
}