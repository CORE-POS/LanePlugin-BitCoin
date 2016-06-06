<?php

if (!class_exists('BitCoin', false)) {
    include(__DIR__ . '/../BitCoin.php');
}

if (!class_exists('BitCoinParser', false)) {
    include(__DIR__ . '/../BitCoinParser.php');
}

if (!class_exists('BitCoinAmountPage', false)) {
    include(__DIR__ . '/../gui/BitCoinAmountPage.php');
}

if (!class_exists('BitCoinPaymentPage', false)) {
    include(__DIR__ . '/../gui/BitCoinPaymentPage.php');
}

