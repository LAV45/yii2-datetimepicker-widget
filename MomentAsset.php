<?php
/**
 * Created by PhpStorm.
 * User: loal
 * Date: 22.08.16
 * Time: 17:08
 */

namespace brussens\datetimepicker;

use yii\web\AssetBundle;

class MomentAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/moment';
    /**
     * @var array
     */
    public $js = [
        'min/moment-with-locales.min.js',
    ];
}