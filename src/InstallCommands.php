<?php
/**
 * Created by PhpStorm.
 * User: victorsecuring
 * Date: 27.12.16
 * Time: 5:47 PM
 */

namespace zaboy\dic;


use Composer\Script\Event;
use zaboy\installer\Install\AbstractCommand;

class InstallCommands extends AbstractCommand
{

    /**
     * return array with Install class for lib;
     * @param null $dir
     * @return array
     */
    public static function getInstallers($dir = null)
    {
        if (!isset($dir)) {
            $dir = __DIR__;
        }
        return parent::getInstallers($dir);
    }
}