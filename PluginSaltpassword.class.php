<?php
/*-------------------------------------------------------
*
*   Plugin name:    Salt Password
*   Author:         Chiffa
*   Web:            http://goweb.pro
*
---------------------------------------------------------
*/

if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginSaltpassword extends Plugin
{
    protected $aInherits = [
        'module' => [
            'ModuleUser'
        ]
    ];

    /**
     * Инициализация плагина
     */
    public function Init()
    {
        return true;
    }
}
