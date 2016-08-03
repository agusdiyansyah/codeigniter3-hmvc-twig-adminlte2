<?php

/**
 *
 */
class Markas extends MX_Controller
{
    public $templateExtention = ".html";

    function __construct()
    {
        parent::__construct();
    }

    public function template ($paths = "admin") {
        // $paths = "modules/" . get_class($this) . "/views/" . $paths;
        $paths = ["paths" => [APPPATH . "views/$paths", VIEWPATH]];
        $this->load->library("Twig", $paths);
        $this->twig->base = base_url();
        $this->twig->defaultParams = $this->navbarMessages() + $this->navbarNotifications();
    }

    private function navbarMessages () {
        return array(
            "navbarMessages" => array(
                "totalAllData" => 10,
                "showData" => array(
                    array("photo" => "user2-160x160.jpg", "from" => "Support Team", "time" => "5 mins", "msg" => "Why not buy a new awesome theme?"),
                    array("photo" => "user3-128x128.jpg", "from" => "AdminLTE Design Team", "time" => "2 hours", "msg" => "Why not buy a new awesome theme?"),
                    array("photo" => "user4-128x128.jpg", "from" => "Developers", "time" => "Today", "msg" => "Why not buy a new awesome theme?"),
                    array("photo" => "user3-128x128.jpg", "from" => "Sales Department", "time" => "Yesterday", "msg" => "Why not buy a new awesome theme?"),
                    array("photo" => "user4-128x128.jpg", "from" => "Reviewers", "time" => "2 days", "msg" => "Why not buy a new awesome theme?"),
                )
            )
        );
    }

    private function navbarNotifications () {
        return array(
            "navbarNotifications" => array(
                "totalAllData" => 20,
                "showData" => array(
                    array("icon" => "fa fa-users text-aqua", "task" => "5 new members joined today"),
                    array("icon" => "fa fa-warning text-yellow", "task" => "Very long description here that may not fit into the page and may cause design problems"),
                    array("icon" => "fa fa-users text-red", "task" => "5 new members joined"),
                    array("icon" => "fa fa-shopping-cart text-green", "task" => "25 sales made"),
                    array("icon" => "fa fa-user text-red", "task" => "You changed your username")
                )
            )
        );
    }

}
