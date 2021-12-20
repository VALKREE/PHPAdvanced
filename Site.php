<?php
include "Template.php";
class Site extends Template {

    function content() { ?>
      <main class='main center'>
         <?PHP include "./content.php"; ?>
      </main>
    <?PHP }
}