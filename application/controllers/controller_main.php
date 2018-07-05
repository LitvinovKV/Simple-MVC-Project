<?php
    class Controller_Main extends Controller {
        // Переопределение родительского метода
        function action_index() {
            $this->view->generate("main_view.php", "template_view.php");
        } 
    }
?>