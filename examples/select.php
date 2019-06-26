<?php

include_once __DIR__ . '/../vendor/autoload.php';

$cui = (new \MilesChou\PhermUI\Builder())->build();

$cui->createSelectView('view1', 10, 10, 40, 5)
    ->addItem('Hello')
    ->addItem('World')
    ->addItem('中文')
    ->addItem('Item 4')
    ->addItem('Item 5')
    ->addItem('Item 6');

$cui->run();

$cui->move()->bottom();

sleep(1);
