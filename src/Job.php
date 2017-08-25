<?php
namespace Bresume;

Class Job
{
    /**
     * 第一份工作
     * @return mixed
     */
    public function one() {
        return $this->handle(__FUNCTION__, '1.');
    }

    /**
     * 第二份工作
     * @return mixed
     */
    public function two() {
        return $this->handle(__FUNCTION__, '2.');
    }

    /**
     * 第三份工作
     * @return mixed
     */
    public function three() {
        return $this->handle(__FUNCTION__, '3.');
    }

    /**
     * 第四份工作
     * @return mixed
     */
    public function four() {
        return $this->handle(__FUNCTION__, '4.');
    }

    /**
     * 第五份工作
     * @return mixed
     */
    public function five() {
        return $this->handle(__FUNCTION__, '5.');
    }

    /**
     * 第六份工作
     * @return mixed
     */
    public function six() {
        return $this->handle(__FUNCTION__, '6.');
    }

    /**
     * 第七份工作
     * @return mixed
     */
    public function seven() {
        return $this->handle(__FUNCTION__, '7.');
    }

    /**
     * 第八份工作
     * @return mixed
     */
    public function eight() {
        return $this->handle(__FUNCTION__, '8.');
    }

    /**
     * 第九份工作
     * @return mixed
     */
    public function nine() {
        return $this->handle(__FUNCTION__, '9.');
    }

    /**
     * 第十份工作
     * @return mixed
     */
    public function ten() {
        return $this->handle(__FUNCTION__, '10.');
    }

    protected function handle($name, $description) {
        if(!count($this->$name)) {
            return '';
        }

        $pre = "<pre><span class='notation inner'>// $description</span><span class='varName'>$$name</span> = [<pre>[%KEY%]</pre>];</pre><br />";
        $tmpStr = '';
        foreach ($this->$name as $varName => $varValue) {
            $str = str_replace('[%VARNAME%]', $varName, "<span class='string operator'><span class='string'>\"[%VARNAME%]\"</span> => <span class='string'>\"[%VARVALUE%]\"</span>,</span><br />");
            $str = str_replace('[%VARVALUE%]', $varValue, $str);
            $tmpStr .= $str;
        }
        return str_replace('[%KEY%]', $tmpStr, $pre);
    }
}