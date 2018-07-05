<?php
    class View {
        // Метод для формирования представления
        // contentView - представление отображающий контент страниц
        // templateView - шаблон для всех страниц
        // data - массив, содержащий элементы контента страницы 
        function generate($contentView, $templateView, $data = null) {
            include 'application/views/' . $templateView;
        }
    }
?>