<?php
if (class_exists(\registry\Registry)) {
    include __DIR__ . '/config/config.php';
    \common\Registry::registerConfig('beastozavr/yii2module', $config);
}