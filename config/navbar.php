<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "index" => [
                "text"  => t("Home"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Home")
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About")
            ],

            "blogg" => [
                "text"  => t("Blog"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blog"),
                "mark-if-parent" => true,
            ],

            "theme-analysis" => [
                "text"  => t("Theme"),
                "url"   => $this->di->get("url")->create("theme-analysis"),
                "title" => t("Theme")
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "index" => [
                "text"  => t("Home"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Home")
            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About")
            ],

            "blogg" => [
                "text"  => t("Blog"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("Blog"),
                "mark-if-parent" => true,
            ],

            "theme-analysis" => [
                "text"  => t("Theme"),
                "url"   => $this->di->get("url")->create("theme-analysis"),
                "title" => t("Theme")
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
