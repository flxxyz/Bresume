<?php
namespace Bresume;

use Bresume\Skill;
use Bresume\Job;
use Bresume\Edu;

Class Me
{
    public $about = [];
    public function __construct()
    {
        $this->skill = new Skill();
        $this->job = new Job();
        $this->edu = new Edu();
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return isset($this->$name) ? $this->$name : null;
    }

    public function about() {
        $str = '';
        $tmpStr = '';
        foreach ($this->about as $name => $value) {
            $this->$name = $value;
            $isNum = is_numeric($value) ? 'number' : '';
            if(is_array($value)) {
                $strValArr = "<span class='operator'>[</span><br /><pre>[%VALUE%]</pre><span class='operator ml'>]</span>";
                $tmpStrValArr = '';
                foreach ($value as $val) {
                    $tmpStrValArr .= "<span class='string array'>\"$val\"<span class='punctuation'>,</span><br></span>";
                }
                $strValArr = str_replace('[%VALUE%]', "$tmpStrValArr", $strValArr);
                $value = $strValArr;
            }else {
                $value = is_numeric($value) ?  $value : "\"$value\"";
            }

            $str = "    <spen class='string $isNum'><span class='varName'>$[%NAME%]</span> <span class='operator'>=</span> [%VALUE%]<span class='operator'>;</span></spen><br />";
            $tmpStr .= str_replace('[%VALUE%]', "$value", str_replace('[%NAME%]', "$name", $str));
        }

        return $tmpStr;
    }



}