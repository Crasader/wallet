<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname(dirname($vendorDir));

return array(
    'think\\helper\\' => array($vendorDir . '/topthink/think-helper/src'),
    'think\\composer\\' => array($vendorDir . '/topthink/think-installer/src'),
    'think\\captcha\\' => array($vendorDir . '/topthink/think-captcha/src'),
    'think\\' => array($baseDir . '/system/thinkphp/library/think', $vendorDir . '/topthink/think-image/src', $vendorDir . '/topthink/think-queue/src'),
    'mindplay\\annotations\\' => array($vendorDir . '/mindplay/annotations/src/annotations'),
    'Qiniu\\' => array($vendorDir . '/qiniu/php-sdk/src/Qiniu'),
    'JPush\\' => array($vendorDir . '/jpush/jpush/src/JPush'),
    'FontLib\\' => array($vendorDir . '/phenx/php-font-lib/src/FontLib'),
    'Dompdf\\' => array($vendorDir . '/dompdf/dompdf/src'),
);
