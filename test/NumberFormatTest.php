<?php
require  '../vendor/autoload.php';
use numberFormatLqc\NumberFormatLqc;

$number = '102400010';
echo NumberFormatLqc::byte_format($number);