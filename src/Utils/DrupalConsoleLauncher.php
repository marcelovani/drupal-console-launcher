<?php

namespace Drupal\Console\Utils;

/**
 * Class Launcher
 * @package Drupal\Console\Utils
 */
class DrupalConsoleLauncher
{
    /**
     * @param $root
     */
    public function launch($root)
    {
        chdir($root);
        /* default drupal installation */
        $drupal = $root.'/vendor/bin/drupal';

        if (!file_exists($drupal)) {
            /* drupal installed via drupal-composer related project */
            $drupal = $root.'/../vendor/bin/drupal';
        }

        if (!file_exists($drupal)) {
            /* ask to install drupal console */
        }

        include_once $drupal;
    }
}
