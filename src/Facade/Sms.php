<?php
namespace Hardywen\PhpSms\Facade;

use Illuminate\Support\Facades\Facade;

class Sms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'phpsms-l4';
    }
}