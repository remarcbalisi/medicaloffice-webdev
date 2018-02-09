<?php

class Globals{

    protected static $root_dir = "medicaloffice";
    protected static $http = "http://";
    protected static $host = "localhost";

    public static function baseUrl(){
        $root_dir = "medicaloffice";
        $http = "http://";
        $host = "localhost";
        $base_url = $http . $host . "/" . $root_dir;
        return $base_url;
    }

}

?>
