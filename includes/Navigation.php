<?php

class Navigation
{
    private $currentPage = "Home";
    private $pageTitle = "";
    private $pageDescription = "";

    function __construct()
    {

    }

    public function setPage($pageName)
    {
        $this->currentPage = $pageName;
    }

    public function setPageTitle($title)
    {
        $this->pageTitle = $title;
    }

    public function setPageDescription($description)
    {
        $this->pageDescription = $description;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    public function getPageDescription()
    {
        return $this->pageDescription;
    }
}