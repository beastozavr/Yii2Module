<?php
if (class_exists(\registry\Registry::class)) {
    include __DIR__ . '/config/config.php';
    \registry\Registry::registerConfig('beastozavr/yii2module', $config);
}