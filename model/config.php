<?php 
define("DB_HOST",'localhost');
define("DB_USER",'root');
define('DB_PWD','root');
define('DB_NAME','db_cro');
define('DB_PORT','3306');
define('DB_TYPE','mysql');
define('DB_CHARSET','utf8');
//对输入的转义
if (!function_exists(get_magic_quotes_gpc) || !get_magic_quotes_gpc()) {
    foreach (array('_COOKIE', '_POST', '_GET') as $v) {
        foreach ($$v as $kk => $vv) {
            $kk{0} != '_' && $$v[$kk] = addslashes($vv);
        }
    }
}
?>
