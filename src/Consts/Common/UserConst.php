<?php
namespace Xieheng\Love\Consts\Common;

class UserConst
{
    const STATUS_DRAFT = -1;

    public static function test(){
        return self::STATUS_DRAFT . self::STATUS_DRAFT;
    }
}