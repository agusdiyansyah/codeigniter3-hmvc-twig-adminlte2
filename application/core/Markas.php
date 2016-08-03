<?php

/**
 *
 */
class Markas extends MX_Controller
{
    private $paths;

    function __construct()
    {
        parent::__construct();
    }

    /**
     * get base template
     * @param  string $get get admin or public template
     * @return object      markas
     */
    public function template ($get = "admin") {

        $paths = array("paths" => array(APPPATH . "views/$get", VIEWPATH));
        $this->load->library("Twig", $paths);
        $this->twig->base = base_url();

        if ($get == "admin") {
            $this->twig->cache = false;
            $this->admin();
        }

        return $this;
    }

    /**
     * This function for prepend path to twig render path
     * @param string $namespace  namespace for twig dir path
     * @param string $customPath any path
     */
    public function addPath ($namespace = "", $customPath = "") {
        if (empty($customPath)) {
            $paths = APPPATH . "modules/" . get_class($this) . "/views/";
        } else {
            $paths = $customPath;
        }
        if (empty($namespace)) {
            $this->twig->addPath($paths);
        } else {
            $this->twig->addPath($paths, $namespace);
        }
        return $this;
    }


    // template data
    private function admin () {
        $this->twig->defaultParams = $this->navbarMessages() + $this->navbarNotifications() + $this->navbarTasks() + $this->userData() + $this->sidebarLeft();
    }

    private function navbarMessages () {
        // load messages model
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
        // load notifications model
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

    private function navbarTasks () {
        // load tasks model
        return array(
            "navbarTasks" => array(
                "totalAllData" => 15,
                "showData" => array(
                    array("task" => "Create some button", "progress" => "20"),
                    array("task" => "Create a nice theme", "progress" => "30"),
                    array("task" => "Some task I need to do", "progress" => "25"),
                    array("task" => "Make beautiful transitions", "progress" => "80")
                )
            )
        );
    }

    private function userData () {
        // load userdata model
        return array(
            "username" => "Agus Diyansyah",
            "photo" => "user2-160x160.jpg",
            "level" => "Admin"
        );
    }

    private function sidebarLeft () {
        // set static menu or dynamic menu from model
        return array(
            "dataMenu" => array(
                array(
                    "label" => "PENGURUS BARANG",
                    "menu" => array(
                        array("icon" => "fa-home", "title" => "Dashboard", "link" => "#"),
                        array(
                            "icon" => "fa-users", "title" => "User", "link" => "#",
                            "submenu" => array(
                                array("title" => "Data", "link" => "#"),
                                array("title" => "Tambah", "link" => "#"),
                            )
                        ),
                    )
                ),
                array(
                    "label" => "PENYIMPAN BARANG",
                    "menu" => array(
                        array("icon" => "fa-save", "title" => "Barang", "link" => "#"),
                        array("icon" => "fa-download", "title" => "Penerimaan", "link" => "#"),
                        array("icon" => "fa-upload", "title" => "Pengeluaran", "link" => "#"),
                    )
                )
            )
        );
    }

}
