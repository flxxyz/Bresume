<?php
namespace Bresume;

Class Job
{
    /**
     * 第一份工作
     * @return mixed
     */
    public function one() {
        return $this->handle(__FUNCTION__, '第一');
    }

    /**
     * 第二份工作
     * @return mixed
     */
    public function two() {}

    /**
     * 第三份工作
     * @return mixed
     */
    public function three() {}

    /**
     * 第四份工作
     * @return mixed
     */
    public function four() {}

    /**
     * 第五份工作
     * @return mixed
     */
    public function five() {}

    /**
     * 第六份工作
     * @return mixed
     */
    public function six() {}

    /**
     * 第七份工作
     * @return mixed
     */
    public function seven() {}

    /**
     * 第八份工作
     * @return mixed
     */
    public function eight() {}

    /**
     * 第九份工作
     * @return mixed
     */
    public function nine() {}

    /**
     * 第十份工作
     * @return mixed
     */
    public function ten() {}

    protected function handle($name, $description) {
        $aaa = "<pre><span class='notation inner'>// $description</span><span class='varName'>$$name</span> = [<pre>[%KEY%]</pre>];</pre>";
        $tmpStr = '';
        foreach ($this->$name as $varName => $varValue) {
            $str = str_replace('[%VARNAME%]', $varName, "<span class='string operator'><span class='string'>\"[%VARNAME%]\"</span> => <span class='string'>\"[%VARVALUE%]\"</span>,</span><br />");
            $str = str_replace('[%VARVALUE%]', $varValue, $str);
            $tmpStr .= $str;
        }
        return str_replace('[%KEY%]', $tmpStr, $aaa);
    }
}