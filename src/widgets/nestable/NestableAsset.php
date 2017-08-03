<?php

namespace musgravehill\tree\manager\widgets\nestable;

use yii\web\AssetBundle;

/**
 * Class NestableAsset
 * @package musgravehill\tree\manager\widgets
 */
class NestableAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/musgravehill/yii2-tree-manager/src/widgets/nestable/assets';

    /**
     * @var array
     */
    public $css = [
        'jquery.nestable.css'
    ];

    /**
     * @var array
     */
    public $js = [
        'jquery.nestable.js'
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}