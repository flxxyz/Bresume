<?php
require_once 'vendor/autoload.php';

use Bresume\Me;

$me = new Me();

$me->about = [
    'name' => '冯良贤',
    'age' => $me->common->name('1997-10-18'),  // 出身日期 1997-10-18
    'country' => 'China',
    'city' => 'Wuhan',
    'phone' => 13000000000,
    'qq' => 1547755744,
    'email' => 'i@mdzz.name',
    'contact' => [
        'github' => 'https://github.com/flxxyz',
        'steam' => 'http://steamcommunity.com/id/flxxyz/',
        'google plus' => 'https://plus.google.com/101182464222136059417',
        'twitter' => 'https://twitter.com/flxxyz',
        'bilibili' => 'http://space.bilibili.com/2953067/',
        'weibo' => 'http://weibo.com/flxxy',
    ],
    'site' => [
        'mdzz.name',
        'toyou.ren',
        'jutasky.club',
        '19971018.date',
        '...'
    ],
];
$me->skill->web = [
    'html' => '80%',
    'css' => '75%',
    'javascript' => '70%',
    'jquery' => '80%',
    'bootstrap' => '45%',
    'bulma' => '80%',
    'vuejs' => '20%',
    'nodejs' => '60%',
    'php' => '90%',
];
$me->skill->dev = [
    'linux' => '40%',
    'nginx' => '30%',
    'php' => '75%',
    'mysql' => '50%',
    'redis' => '65%',
    'mongo' => '45%',
    'python' => '20%',
];
$me->skill->ops = [];
$me->skill->devOps = [];
$me->skill->framework = [
    'laravel',
    'codeigniter',
    'thinkphp',
    'swoole',
    'express',
];
$me->skill->mobile = [];
$me->skill->embedded = [];
$me->skill->game = [];
$me->skill->ai = [];

require_once 'homepage.php';
