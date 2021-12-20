<?php
abstract class Template{
    private $title = "";

    function getTitle(){
        return $this->title;
    }

    function header(){ ?>
        <header class='header center flexVHCenter'>
            <a href="index.php?page=main" class="header-link">Главная</a>
            <a href="index.php?page=lesson1" class="header-link">Урок 1</a>
            <a href="index.php?page=lesson2" class="header-link">Урок 2</a>
            <a href="index.php?page=lesson3" class="header-link">Урок 3</a>
            <a href="index.php?page=lesson4" class="header-link">Урок 4</a>
            <a href="index.php?page=lesson5" class="header-link">Урок 5</a>
            <a href="index.php?page=lesson6" class="header-link">Урок 6</a>
            <a href="index.php?page=lesson7" class="header-link">Урок 7</a>
            <a href="index.php?page=lesson8" class="header-link">Урок 8</a>
        </header>
    <?PHP }
    function footer(){ ?>
        <footer class='footer center flexVHCenter'>
            <a href="index.php?page=main" class="header-link">Главная</a>
            <a href="index.php?page=lesson1" class="header-link">Урок 1</a>
            <a href="index.php?page=lesson2" class="header-link">Урок 2</a>
            <a href="index.php?page=lesson3" class="header-link">Урок 3</a>
            <a href="index.php?page=lesson4" class="header-link">Урок 4</a>
            <a href="index.php?page=lesson5" class="header-link">Урок 5</a>
            <a href="index.php?page=lesson6" class="header-link">Урок 6</a>
            <a href="index.php?page=lesson7" class="header-link">Урок 7</a>
            <a href="index.php?page=lesson8" class="header-link">Урок 8</a>
        </footer>
    <?PHP }

    abstract function content();

    function renderPage(){
        $this->header();
        $this->content();
        $this->footer();
    }

}