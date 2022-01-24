<?php

/*
Plugin Name: Example
Plugin URI: #
Description: #
Version: 1.0
Author: MyPixel
Author URI: https://www.mypixel.nl/
*/

namespace GfExamplePlugin;

$directoriesToRequire = [
    realpath(__DIR__ . '/classes/utils'),
    realpath(__DIR__ . '/classes/gravityforms'),
];

foreach ($directoriesToRequire as $directory) {
    $directoryFiles = scandir($directory);
    if ($directoryFiles) {
        foreach ($directoryFiles as $directoryFile) {
            $filePath = $directory . '/' . $directoryFile;
            $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
            if ($fileExtension === 'php') require_once($filePath);
        }
    }
}

/**
 * Class Plugin
 * @package GfExamplePlugin
 */
class GfExamplePlugin extends Singleton
{

    //Define theme text domain
    const TEXT_DOMAIN = 'gf_example_plugin';

    /**
     * Theme constructor.
     */
    protected function __construct()
    {
        self::initScripts();
    }

    /**
     * Init scripts
     */
    public static function initScripts()
    {
        GravityFormsRegistrationForm::getInstance();
    }
}

//init theme
global $themeInstance;
if (!$themeInstance) $themeInstance = GfExamplePlugin::getInstance();

if (!defined('ABSPATH')) {
    exit;
}
