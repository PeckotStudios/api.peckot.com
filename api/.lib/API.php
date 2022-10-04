<?php

namespace Pectics;

class API {
    
    public function API() {
        return $this;
    }
    
    public function outputInfo(int $code, string $msg, array $values) {
        return array(
            'code' => $code,
            'message' => $msg,
            ) + $values;
    }
    
    public function outputError(int $code, string $msg, string $advice, array $values) {
        return array(
            'code' => $code,
            'message' => $msg,
            'advice' => $advice,
            ) + $values;
    }
    
    public function getMidStr($str, $left, $right) {
        return mb_substr($str, mb_strpos($str, $left)+1, mb_strpos($str, $right)-mb_strpos($str, $left)-1);
    }
    
    public function getClearStr($str, $char) {
        return str_replace(mb_substr($str, 0, mb_strpos($str, $char)), '', $str);
    }
    
    public function arrayToXml($data) {
        if(!is_array($data) || count($data) <= 0) {
            return false;
        }
        $xml = "";
        foreach ($data as $key=>$val) {
            if (is_numeric($val)) {
                $xml.="<".$key.">".$val."";
            } else {
                $xml.="<".$key.">";
            }
        }
        $xml.="";
        return $xml;
    }
}
?>