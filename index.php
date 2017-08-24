<?php
require_once 'vendor/autoload.php';

use Bresume\Me;

$me = new Me();

$me->about = [
    'name' => 'Fengliangxian',
    'age' => intval((abs(time()-strtotime('1997-10-18')) / 86400) / 365),
    'country' => 'China',
    'city' => 'Wuhan',
    'email' => 'i@mdzz.name',
    'site' => [
        'flxxyz.com',
        'udwbu.com',
        '64vw.com',
        'lajiqq.com',
        'qqshit.com',
        'mdzz.name',
        'toyou.ren',
        'jutasky.club',
        '19971018.date',
        '...'
    ]
];
$me->skill->web = [
    'html' => '100%',
    'css' => '100%',
    'javascript' => '100%',
    'jquery' => '100%',
    'bootstrap' => '100%',
    'nodejs' => '100%',
    'php' => '100%',
];
$me->skill->dev = [
    'linux' => '100%',
    'nginx' => '100%',
    'php' => '75%',
    'mysql' => '100%',
    'redis' => '50%',
    'mongo' => '50%',
    'python' => '100%',
];
$me->skill->ops = [];
$me->skill->devOps = [];
$me->skill->framework = [
    'laravel',
    'codeigniter',
    'thinkphp',
    'swoole',
    'express'
];
$me->skill->mobile = [];
$me->skill->embedded = [];
$me->skill->game = [];
$me->skill->ai = [];
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--<script src="https://cdn.bootcss.com/prism/9000.0.1/prism.js"></script>-->
    <!--<script src="https://cdn.bootcss.com/prism/9000.0.1/components/prism-php.js"></script>-->
    <!--<link href="https://cdn.bootcss.com/prism/9000.0.1/themes/prism-twilight.css" rel="stylesheet">-->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<pre class="class">
<span class="identifier">Class</span> <span class="className"><?php echo $me->about['name']?></span> {
<pre class="action">
<span class="notation">// 个人</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">skill</span>() {
<?php
echo $me->about();
?>
}</pre>
<pre class="action">
<span class="notation">// 技能树</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">skill</span>() {
    <?php
    echo $me->skill->web();
    echo $me->skill->dev();
    echo $me->skill->ops();
    echo $me->skill->devOps();
    echo $me->skill->mobile();
    echo $me->skill->embedded();
    echo $me->skill->game();
    echo $me->skill->ai();
    echo $me->skill->framework();
    ?>}
</pre>
<pre class="action">
<span class="notation">// 工作经历</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">job</span>() {
<?php echo $me->job->one(); ?>
}</pre>
<pre class="action">
<span class="notation">// 教育经历</span>
<span class="identifier">public</span> <span class="identifier">function</span> <span class="actionName">edu</span>() {
<?php echo $me->edu->nursery(); ?>
}</pre>
}
</pre>
<?php
echo date('Y');
echo date('Y');
?>
</body>
</html>
