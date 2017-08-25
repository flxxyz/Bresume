<?php
namespace Bresume;

Class Skill
{
    const Arr = "<pre class=\"action\"><span class=\"notation inner\">// [%DESCRIPTION%]</span><span class='varName'>[%VAR_TYPE%]</span> = [<br />[%key%]];</pre><br />";
    public $web = [];
    public $dev = [];
    public $mobile = [];
    public $embedded = [];
    public $game = [];
    public $ai = [];
    public $ops = [];
    public $devOps = [];
    public $framework = [];

    public function __construct()
    {

    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return isset($this->$name) ? $this->$name : null;
    }

    /**
     * 移动
     * @return mixed
     */
    public function mobile() {
        return $this->handle('mobile', '移动开发');
    }

    /**
     * 嵌入式
     * @return mixed
     */
    public function embedded() {
        return $this->handle('embedded', '嵌入式开发');
    }

    /**
     * 游戏
     * @return mixed
     */
    public function game() {
        return $this->handle('game', '游戏开发');
    }

    /**
     * 人工智能
     * @return mixed
     */
    public function ai() {
        return $this->handle('ai', '人工智能');
    }

    /**
     * 前端
     * @return mixed
     */
    public function web() {
        return $this->handle('web', 'Web开发');
    }

    /**
     * 后端
     * @return mixed
     */
    public function dev() {
        return $this->handle('dev', '后端');
    }

    /**
     * 运维
     * @return mixed
     */
    public function ops() {
        return $this->handle('ops', '运维');
    }

    /**
     * 开发运维
     * @return mixed
     */
    public function devOps() {
        return $this->handle('devOps', '开发运维');
    }

    /**
     * 框架
     * @return mixed
     */
    public function framework() {
        return $this->handle('framework', '使用的框架');
    }

    /**
     * 处理“数组”生成
     * @param $name
     * @param $description
     *
     * @return mixed|string
     */
    protected function handle($name, $description) {
        if(!count($this->$name)) {
            return '';
        }

        $strNoKey = "<span class='string array'>\"[%VAR_NAME%]\" <span class='operator'>=></span> \"<span class='[%STRONG%]'>[%VALUE%]</span>\"<span class='punctuation'>,</span><br></span>";  // 没有键名
        $strKey = "<span class='string array'>\"<span class='[%STRONG%]'>[%VALUE%]</span>\"<span class='punctuation'>,</span><br></span>";  // 有键名

        $tmpStr = '';
        foreach ($this->$name as $varName => $value) {
            if(is_numeric($varName)) {
                $tmp = $this->numeric($value, $strKey);
                $tmpStr .= str_replace('[%VALUE%]', ucfirst($value), $tmp);
            }else {
                $tmp = $this->numeric($value, $strNoKey);
                $tmpStr .= str_replace('[%VALUE%]', $this->$name[$varName], str_replace('[%VAR_NAME%]', ucfirst($varName), $tmp));
            }



            //$tmpArr[ucfirst($varName)] = $this->web[$varName];
        }
        $str = str_replace('[%key%]', $tmpStr, self::Arr);
        $str = str_replace('[%VAR_TYPE%]', "$$name", $str);
        return str_replace('[%DESCRIPTION%]', $description, $str);
    }

    protected function numeric($value = '', $str = '') {
        $num = str_replace('%', '', $value);
        if(is_numeric($num)) {
            // 能力值大于等55的强调
            if($num >= 55) {
                return str_replace('[%STRONG%]', 'strong', $str);
            }
        }

        return str_replace('[%STRONG%]', '', $str);
    }
}