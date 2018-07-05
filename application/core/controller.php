<?php
    class Controller {
        public $model;
        public $view;

        function __construct() {
            $this->view = new View();
        }

        // Действие вызываемое по умолчанию
        // будет переопределенно в производных классах 
        function action_index() {

        } 
    }
?>