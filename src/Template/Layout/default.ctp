<?php
/**
 * CakeManager (http://cakemanager.org)
 * Copyright (c) http://cakemanager.org
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) http://cakemanager.org
 * @link          http://cakemanager.org CakeManager Project
 * @since         1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Configure;
use Settings\Core\Setting;

$this->assign('title', $title);
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?> / <?= Setting::read('App.Name') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= (Configure::read('CA.LightStrap.subtheme') !== '') ? $this->Html->css('LightStrap.themes/' . strtolower(Configure::read('CA.LightStrap.subtheme')) . '/bootstrap.min.css') : $this->Html->css('LightStrap.bootstrap.min.css'); ?>
    <?= $this->Html->css('LightStrap.font-awesome.min.css') ?>
    <?= $this->Html->css('LightStrap.main') ?>
    <?= $this->Html->script('LightStrap.jquery.min.js') ?>
    <?= $this->Html->script('LightStrap.bootstrap.min.js') ?>
    <?= $this->Html->script('LightStrap.main.js') ?>
    <?= $this->CKEditor->loadJs() ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<header>
    <nav
        class="navbar <?= (Configure::read('CA.LightStrap.navbar') !== '') ? Configure::read('CA.LightStrap.navbar') : 'navbar-inverse' ?> navbar-static-top">
        <div
            class="<?= (Configure::read('CA.LightStrap.container') !== '') ? Configure::read('CA.LightStrap.container') : 'container' ?>">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"
                   href="#"><?= $this->Html->image('LightStrap.cakemanager-ico.png'); ?> <?= Setting::read('App.Name') ?></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav visible-xs">
                    <?= $this->Menu->menu('main', 'CakeAdmin.MainMenu') ?>
                </ul>
                <?= $this->Menu->menu('headerLeft', 'LightStrap.HeaderMenu') ?>
            </div>
        </div>
    </nav>
</header>
<div id="container"
     class="<?= (Configure::read('CA.LightStrap.container') !== '') ? Configure::read('CA.LightStrap.container') : 'container' ?>">
    <div id="content">

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav nav-pills nav-stacked hidden-xs">
                    <?= $this->Menu->menu('main', 'CakeAdmin.MainMenu') ?>
                </ul>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</div>
</body>
</html>
