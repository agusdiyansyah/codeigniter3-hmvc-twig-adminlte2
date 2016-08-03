<?php
/**
 *
 */
class Base extends Markas
{

    function __construct(){
        parent::__construct();
    }

    public function index ($debug = false) {
        $data = array (
            "nama" => "agusdiyansyah",
        );
        if ($debug) {
            header("content-type: application/json");
            echo json_encode($data);
        } else {
            $this->template();
            $this->twig->render("index.html", $data);
        }

    }
}
