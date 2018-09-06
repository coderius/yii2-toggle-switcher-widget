<?php

namespace coderius\switcher;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class ToggleSwitchAsset extends AssetBundle
{
    public $sourcePath = (__DIR__ . '/assets');
    
    public $css = ["css/jquery.mswitch.css"];
    public $js = ["js/jquery.mswitch.js"];
    
    public $jsOptions = [
        'position' => \yii\web\View::POS_END,
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
    
    public $publishOptions = [
        'forceCopy'=>true,
    ];
    
    public function init()
    {
        
        parent::init();
    }
    
//    protected function setupAssets($type, $files = [])
//    {
//        if ($this->$type === self::KRAJEE_ASSET) {
//            $srcFiles = [];
//            $minFiles = [];
//            foreach ($files as $file) {
//                $srcFiles[] = "{$file}.{$type}";
//                $minFiles[] = "{$file}.min.{$type}";
//            }
//            $this->$type = YII_DEBUG ? $srcFiles : $minFiles;
//        } elseif ($this->$type === self::EMPTY_ASSET) {
//            $this->$type = [];
//        }
//    }
    
    
}
