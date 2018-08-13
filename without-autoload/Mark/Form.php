<?php
namespace Mark;
class Form {

    public function __construct() {
    }
    /**
     * 
     * @param array $args
     * @param boolean $return
     * @return string
     */
    public static function open($args, $return = false) {
        $out = "<form ";
        $out.= (array_key_exists('class', $args)) ? "class='" . $args['class'] . "' " : "";
        $out.= (array_key_exists('id', $args)) ? "id='" . $args['id'] . "' " : "";
        $out.= (array_key_exists('action', $args)) ? "action='" . $args['action'] . "' " : "";
        $out.= (array_key_exists('method', $args)) ? "method='" . $args['method'] . "' " : "";
        $out.= (array_key_exists('enctype', $args)) ? "enctype='" . $args['enctype'] . "' " : "";
        $out.= (array_key_exists('name', $args)) ? "name='" . $args['name'] . "' " : "";
        $out.= (array_key_exists('accept-charset', $args)) ? "accept-charset='" . $args['accept-charset'] . "' " : "";
        $out.= (array_key_exists('autocomplete', $args)) ? "autocomplete='" . $args['autocomplete'] . "' " : "";
        $out.= (array_key_exists('novalidate', $args)) ? "novalidate='" . $args['novalidate'] . "' " : "";
        $out.= (array_key_exists('target', $args)) ? "target='" . $args['target'] . "' " : "";

        $out.= ">";

        if ($return) {
            return $out;
        } else {
            echo $out;
        }
    }

    public static function close($return = false) {
        if ($return) {
            return "</form>";
        } else {
            echo "</form>";
        }
    }

}
