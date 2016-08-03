<?php
/**
 *
 */
class Base extends Markas {

    function __construct(){
        parent::__construct();
    }

    public function index ($debug = false) {
        // $this->twig->debug = true;
        if ($debug) {
            header("content-type: application/json");
            echo json_encode($data);
        } else {
            $this->template()
            ->twig->render("index");
        }

    }

    public function hello () {
        $data = array(
            "menu" => "User", "submenu" => "Tambah", "page" => "Hello",
            "txt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        );
        $this->template()
        ->addPath("base")
        ->twig->render("@base/hello", $data);
    }

}
