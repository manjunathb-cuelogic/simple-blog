<?php
use \UnitTester;

class ArticleCest
{
    public function _before(UnitTester $I)
    {
    }

    public function _after(UnitTester $I)
    {
    }

    // tests
    public function article_list()
    {
        $article_id = "1";
        $article_heading = "My First Article";
        $article_content = "Codeception PHP Testing Framework is designed to work just out of the box. This means its installation requires minimal steps and no external dependencies preinstalled (except PHP, of course).";
        $article_time = time();
    }
   

}