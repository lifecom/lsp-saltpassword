<?php
/*-------------------------------------------------------
*
*   Plugin name:    Salt Password
*   Author:         Chiffa
*   Web:            http://goweb.pro
*
---------------------------------------------------------
*/


class PluginSaltpassword_ModuleUser extends PluginSaltpassword_Inherit_ModuleUser
{

    /**
     * Генерация хеша пароля
     *
     * @param $sPassword
     * @return string
     */
    public function MakeHashPassword($sPassword)
    {
        $sSaltPrefix = (string)Config::Get('plugin.saltpassword.encrypt_prefix');
        $sSaltSuffix = (string)Config::Get('plugin.saltpassword.encrypt_suffix');
        return func_encrypt(func_encrypt($sSaltPrefix) . func_encrypt($sPassword) . func_encrypt($sSaltSuffix));
    }

}
