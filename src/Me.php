<?php
namespace Bresume;

use Bresume\Skill;
use Bresume\Job;
use Bresume\Edu;
use Bresume\Common;

Class Me
{
    public $about = [];
    public function __construct()
    {
        $this->skill = new Skill();
        $this->job = new Job();
        $this->edu = new Edu();
        $this->common = new Common();
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
                foreach ($value as $key => $val) {
                    if(is_numeric($key)) {
                        $val = $this->link($val);
                        $tmpStrValArr .= "<span class='string array'>\"$val\"<span class='punctuation'>,</span><br></span>";
                    }else {
                        $key = ucfirst($key);
                        $val = $this->link($val);
                        $tmpStrValArr .= "<span class='string array'>\"$key\" => \"$val\"<span class='punctuation'>,</span><br></span>";
                    }
                }
                $strValArr = str_replace('[%VALUE%]', "$tmpStrValArr", $strValArr);
                $value = $strValArr;
            }else {
                $value = is_numeric($value) ?  $value : $this->link($value, 'mail');
            }

            $str = "    <spen class='string $isNum'><span class='varName'>$[%NAME%]</span> <span class='operator'>=</span> [%VALUE%]<span class='operator'>;</span></spen><br />";
            $tmpStr .= str_replace('[%VALUE%]', "$value", str_replace('[%NAME%]', "$name", $str));
        }

        return $tmpStr;
    }

    protected function link($value = '', $type = 'url') {
        switch ($type) {
            case 'mail':
                if (preg_match("/[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+/", $value, $matches)) {
                    //var_dump($matches);
                    return str_replace('[%HREF%]', $matches[0], "<a href='mailto:[%HREF%]'>[%HREF%]</a>");
                }
                break;
            case 'url':
            default:
                if (preg_match("/[a-zA-z]+:\/\/[^\s]*/", $value, $matches)) {
                    //var_dump($matches[0]);
                    return str_replace('[%HREF%]', $matches[0], "<a href='[%HREF%]' target='_blank'>[%HREF%]</a>");
                }
                break;
        }


        return $value;
    }


}