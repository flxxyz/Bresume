<?php
require_once 'vendor/autoload.php';

use Bresume\Me;

$me = new Me();

#### 个人信息 ####
$me->about = [
    '名字' => '冯小贤',
    '年龄' => $me->common->name('1997-10-18'),  // 出身日期 1997-10-18
    '国家' => 'China',
    '城市' => 'Wuhan',
    '电话' => 13000000000,
    'QQ' => 1547755744,
    '邮箱' => 'i@mdzz.name',
    '站点' => [
        'BLOG' => 'https://blog.flxxyz.com',
        'API' => 'https://api.flxxyz.com',
        'LOVE' => 'http://love.flxxyz.com',
        //'http://19971018.date',
        '...'
    ],
    '其它联系方式' => [
        'github' => 'https://github.com/flxxyz',
        'steam' => 'http://steamcommunity.com/id/flxxyz/',
        'google plus' => 'https://plus.google.com/101182464222136059417',
        'twitter' => 'https://twitter.com/flxxyz',
        'bilibili' => 'http://space.bilibili.com/2953067/',
        'weibo' => 'http://weibo.com/flxxy',
    ],
    '一言' => '<span id="hitokoto">不知你在哪，但我会去找你，穷极一生找寻你，等着我，一起去寻找彩虹海!<script>hitokoto()</script></span>',
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
$me->project->one = [
    'date' => '2014-1 ~',
    'name' => '自己的站点',
    'site' => 'http://flxxyz.com',
    'description' => '在高中时期自己的小打小闹建立的博客，经过几番数据忘记备份，与服务商的意外，现在终于稳定下来了，在建立博客的同时，也在学习相应的技术，分别建立了技术实验室站点，表白墙站点，各大网站平台的API服务提供站点等等',
    'responsibility' => '站点维护管理与更新',
];
$me->project->two = [
    'date' => '2016-11 ~ 2016-12',
    'name' => '租屋速 - 快捷房屋租赁服务平台',
    'site' => 'http://zuwusu.flxxyz.com',
    'description' => '具体类似airbnb的房屋租赁，使用thinkphp开发，前端使用常见的开源库，来快速开发，具体实现项目，在一个月内。
中途由于不可抗力因素，项目在接近完工时被废弃掉',
    'responsibility' => '本人负责项目总体的api接口编写及维护相关工作，并协助前端人员进行测试和协商api接口的规范与要求，但相关需求页面由于前端人员的罢工，只得我来编写相应的页面及用户的交互体验效果。',
];
$me->project->three = [
    'date' => '2017-6 ~',
    'name' => '巨塔工作室官网系列站点',
    'site' => 'http://jutasky.club',
    'description' => '巨塔工作室是我校计算机学院的一个在2007年成立的俱乐部，由学院教导主任为指导老师，俱乐部的学习方向为网站开发，涵盖前后端与运维的一条龙学习流程，这个项目就是重新建设巨塔工作室的官网与俱乐部成员，还有校内外人员相互交流的平台，方便加入巨塔工作室',
    'responsibility' => '项目初始demo由本人编写开发，在与俱乐部的负责人进行交流后，由负责人与我来完成项目最终成品，项目采用laravel5.4开发，demo版本使用的bootstrap4.0，具体工作流程是用laravel编写规范API接口，再由vue.js接收API传递来的数据，使用vue.js的组件来展现数据，对数据的更新，删除，显示',
];
$me->project->four = [
    'date' => '2017-7 ~ 2017-9',
    'name' => '游戏公司后台资源数据统计系统',
    'site' => '公司内部无法访问',
    'description' => '公司现有运营中的手机游戏，在线人数日均2w，之前有一套PHP后台系统二次开发，把已有功能使用nodejs来实现，并且在现有基础上再来添加新功能。
对分发商客户进行相应的权限控制，防止越权。',
    'responsibility' => '本人负责项目总体的api接口编写及维护相关工作，并协助前端人员进行测试和协商api接口的规范与要求',
];
$me->project->five = [];
$me->project->six = [];
$me->project->seven = [];
$me->project->eight = [];
$me->project->nine = [];
$me->project->ten = [];

require_once 'homepage.php';
