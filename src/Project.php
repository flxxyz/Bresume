<?php
namespace Bresume;

use Bresume\Common;

class Project
{
    /**
     * 第一个项目
     * @return mixed
     */
    public function one() {
        return $this->handle(__FUNCTION__, '第一个项目');
    }

    /**
     * 第二个项目
     * @return mixed
     */
    public function two() {
        return $this->handle(__FUNCTION__, '第二个项目');
    }

    /**
     * 第三个项目
     * @return mixed
     */
    public function three() {
        return $this->handle(__FUNCTION__, '第三个项目');
    }

    /**
     * 第四个项目
     * @return mixed
     */
    public function four() {
        return $this->handle(__FUNCTION__, '第四个项目');
    }

    /**
     * 第五个项目
     * @return mixed
     */
    public function five() {
        return $this->handle(__FUNCTION__, '第五个项目');
    }

    /**
     * 第六个项目
     * @return mixed
     */
    public function six() {
        return $this->handle(__FUNCTION__, '第六个项目');
    }

    /**
     * 第七个项目
     * @return mixed
     */
    public function seven() {
        return $this->handle(__FUNCTION__, '第七个项目');
    }

    /**
     * 第八个项目
     * @return mixed
     */
    public function eight() {
        return $this->handle(__FUNCTION__, '第八个项目');
    }

    /**
     * 第九个项目
     * @return mixed
     */
    public function nine() {
        return $this->handle(__FUNCTION__, '第九个项目');
    }

    /**
     * 第十个项目
     * @return mixed
     */
    public function ten() {
        return $this->handle(__FUNCTION__, '第十个项目');
    }

    protected function handle($name, $description) {
        if(!count($this->$name)) {
            return '';
        }

        $pre = "<pre><span class='notation inner'>// $description</span><span class='varName'>$$name</span> = [<pre>[%KEY%]</pre>];</pre><br />";
        $tmpStr = '';
        foreach ($this->$name as $varName => $varValue) {
            $str = str_replace('[%VARNAME%]', $varName, "<span class='string operator'><span class='string'>\"[%VARNAME%]\"</span> => <span class='string'>\"[%VARVALUE%]\"</span>,</span><br />");
            $varValue = \Bresume\Common::link($varValue);
            $str = str_replace('[%VARVALUE%]', $varValue, $str);
            $tmpStr .= $str;
        }
        return str_replace('[%KEY%]', $tmpStr, $pre);
    }
}