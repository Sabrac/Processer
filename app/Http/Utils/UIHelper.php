<?php
/**
 * Created by PhpStorm.
 * User: HaiTH
 * Date: 2017/09/14
 * Time: 17:26
 */

namespace App\Http\Utils;


class UIHelper
{
    /**
     * TODO check url contain path. if contain, active else none
     * @param $path
     * @param string $active
     * @return string
     */
    const
        ACTIVE = 'active';

    public static function checkMenuActive($path, $active = UIHelper::ACTIVE)
    {
        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }
}