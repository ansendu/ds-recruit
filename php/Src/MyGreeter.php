<?php
/**
 * Created by PhpStorm.
 * User: Ansen
 * Date: 2024-07-16
 * Time: 11:39
 */

namespace Src;

class MyGreeter
{

    public function __construct()
    {
        // init MyGreeter
    }

    /**
     * @return string
     */
    public function greeting()
    {
        // get current time
        $now  = new \DateTime();
        $hour = (int)$now->format('G');

        // return the corresponding greeting based on the current time
        if ($hour >= 6 && $hour < 12) {
            return "Good morning";
        } elseif ($hour >= 12 && $hour < 18) {
            return "Good afternoon";
        } else {
            return "Good evening";
        }
    }
}

// 1.示例用法
//$greeter = new MyGreeter();
//echo $greeter->greeting();


//2.思考
//MyGreeterTest本身不存在问题。但可以对一些边界数值进行测试

