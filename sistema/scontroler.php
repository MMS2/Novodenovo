<?php

class Scontroler {

    public $model;
    public $view;
    public static $data = array();

    public function modelo($model) {

        $md = 'app/modelo/' . $model . '.php';

        if (file_exists($md)) {
            require_once $md;
            return new $model();
        } else {

            echo "nao existe o arquivo   " . $model . " em <b>" . $md . "</b>";
        }
    }

    public function ver($view, $data = array()) {

        $vd = 'app/ver/' . $view . '.php';

        if (file_exists($vd)) {
            self::$data = array_merge(self::$data, $data);
            $extract = extract(self::$data);
            require_once $vd;
            return $extract;
        } else {

            echo "nao existe o arquivo " . $view . " em <b>" . $vd . "</b>";
        }
    }

}

?>