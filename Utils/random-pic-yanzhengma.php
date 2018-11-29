<?php

class RandomHerlper
{

    protected static $_instance = null;

    protected function __construct()
    {
        //disallow new instance
    }

    protected function __clone()
    {
        //disallow clone
    }

    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    function picGenerate()
    {
        session_start();
//声明图片格式是png
        header("Content-type:image/png");

//定义图像的宽度和高度
        $img_width = 100;
        $img_height = 25;

//srand函数：播下随机数发生器种子
//microtime 函数：返回当前系统时间戳和微秒数
        srand(microtime() * 100000);
//随机生成验证码
        $new_number = "";
        for ($i = 0; $i < 4; $i++) {
            //rand函数：产生一个随机整数
            //dechex函数：十进制转换为十六进制
            $new_number .= dechex(rand(0, 15));
        }
//将验证码输入session
        $_SESSION["check_auth"] = $new_number;

//创建图像
        $number_img = imageCreate($img_width, $img_height);

//imagecolorallocate 函数：为一幅图像分配颜色
        imageColorallocate($number_img, 18, 20, 19);

        for ($i = 0; $i < strlen($_SESSION["check_auth"]); $i++) {
            //mt_rand 函数：生成更好的随机数，使用 Mersenne Twister 算法返回随机整数
            $font = mt_rand(3, 5);

            $x = mt_rand(1, 8) + $img_width * $i / 4;
            $y = mt_rand(1, $img_height / 4);

            $color = imageColorAllocate($number_img, 255, 255, 255);

            /*
                语法：
                bool imagestring ( resource $image , int $font , int $x , int $y , string $s , int $col )
                作用：
                imagestring() 用 col 颜色将字符串 s 画到 image 所代表的图像的 x，y 坐标处（这是字符串左上角坐标，整幅图像的左上角为 0，0）。如果 font 是 1，2，3，4 或 5，则使用内置字体。

            */
            imageString($number_img, $font, $x, $y, $_SESSION["check_auth"][$i], $color);
        }
//以png格式输出
        imagepng($number_img);
        imagedestroy($number_img);
        return imagepng($number_img);

    }

}

?>
