<?php
namespace DefaultApplication;

use Slince\Application\Application;

class DefaultApplication extends Application
{

    protected $name = 'Default';

    //不使用主题
    protected $theme = false;

    function getRootPath()
    {
        return __DIR__ . '/../';
    }
}