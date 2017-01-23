<?php

namespace app\models;


class Rate
{
    const RATE_FREE = 0;
    const RATE_TIME = 1;
    const RATE_DEFAULT = 2;
    const RATE_PRO = 3;

    public static $duration = [
        self::RATE_FREE => '',
        self::RATE_TIME => '24 hours',
        self::RATE_DEFAULT => '3 month',
        self::RATE_PRO => '1 year'
    ];

}