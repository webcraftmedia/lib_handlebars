<?php
namespace LIB;
class lib_handlebars extends \LIB\lib_js{
    public static function get_class(){
        return self::class;}
    public static function js_path(){
        return new \PLIB('handlebars/lib/handlebars-v4.0.5.js');}
    public static function version(){
        return '4.0.5';}
}
