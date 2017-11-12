<?php
/**
 * @link http://www.coreb2c.com/
 * @copyright Copyright (c) 2008 CoreB2C
 * @license https://github.com/coreb2c/yii2-smartadmin/blob/master/LICENSE.md/
 */

namespace coreb2c\smartadmin;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap css files.
 *
 * 
 * @since 2.0
 */
class SAAsset extends AssetBundle
{
    public $sourcePath = '@webroot/smartadmin';
    public $css = [
        'css/bootstrap.css',
    ];
}
