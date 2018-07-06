<?php
    class Controller_Portfolio extends Controller {
        
        function __construct() {
            $this->model = new Model_Portfolio();
            $this->view = new View();
        }

        // В переменную data записывается массив, возвращаемый методом getData(), класса Model_Portfolio
        // вызывается метод generate() атрибута view и передается в него data в качестве параметра
        function action_index() {
            $data = $this->model->getData();
            $this->view->generate("portfolio_view.php", "template_view.php", $data);
        }
    }
?>