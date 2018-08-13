<?php
namespace Mark\Form;

class Input {
    private static $out = "";
    private static $atts = [];
    
    private function attribute_str($key, $attrabutes){
        if (array_key_exists($key, $attrabutes)){
            return "$key='".$attrabutes[$key]."' ";
        }else{
            return "";
        }
    }
    
    public static function render($attributes){
        $out = "<input ";
        foreach($attributes as $key => $att){
            $out.= self::attribute_str($key,$attributes);
        }
        $out .= "/>";
        echo $out;
    }
    
    public static function markup($attribute){
        $this->atts = $attributes;
        $this->out .= "<input ";
        foreach($this->atts as $key => $att){
            $this->out.= $this->attribute_str($key);
        }
        $this->out .= "/>";
        return $this->out;
    }
}
