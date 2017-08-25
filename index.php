<?php
require_once 'vendor/autoload.php';

use Bresume\Me;

$me = new Me();

#### 个人信息 ####
$me->about = [
    'name' => '冯良贤',
    'age' => $me->common->name('1997-10-18'),  // 出身日期 1997-10-18
    'country' => 'China',
    'city' => 'Wuhan',
    'phone' => 13000000000,
    'qq' => 1547755744,
    'email' => 'i@mdzz.name',
    'home' => [
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

#### 技能树 ####
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
    'seo' => '55%',
    '...',
];
$me->skill->ops = [];
$me->skill->devOps = [
    'linux' => '10%',
    'nginx' => '10%',
    'mysql' => '20%',
    'php' => '75%',
    'redis' => '55%',
    'mongo' => '30%',
    'python' => '15%',
    '...'
];
$me->skill->framework = [
    'laravel',
    'codeigniter',
    'thinkphp',
    'swoole',
    'express',
];
$me->skill->mobile = [
    'HTML5' => '55%',
    'CSS3' => '70%',
    '...',
];
$me->skill->embedded = [];
$me->skill->game = [];
$me->skill->ai = [];

#### 工作经历 ####
$me->job->one = [
    'date' => '2017-6 ~ 2017.9',
    'company' => '武汉星汉娱乐有限公司',
    'position' => '后端开发',
    'content' => '负责后台的API开发与前端页面的交互',
];
$me->job->two = [];
$me->job->three = [];
$me->job->four = [];
$me->job->five = [];
$me->job->six = [];
$me->job->seven = [];
$me->job->eight = [];
$me->job->nine = [];
$me->job->ten = [];

#### 教育经历 ####
$me->edu->nursery = [];
$me->edu->primary = [];
$me->edu->primary = [];
$me->edu->secondary = [];
$me->edu->high = [];
$me->edu->college = [];
$me->edu->university = [];
$me->edu->master = [];
$me->edu->mba = [];
$me->edu->doctor = [];
$me->edu->postdoctor = [];

#### 项目经历 ####
$me->project->one = [];
$me->project->two = [];
$me->project->three = [];
$me->project->four = [];
$me->project->five = [];
$me->project->six = [];
$me->project->seven = [];
$me->project->eight = [];
$me->project->nine = [];
$me->project->ten = [];

require_once 'homepage.php';
