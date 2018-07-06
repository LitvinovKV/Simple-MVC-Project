<?php
    class Model_Portfolio extends Model {
        // Переопределение родительского метода getDate(), который
        // возвращает массив с данными для портфолио
        public function getData() {
            return array(
                array(
                    "Year" => 2017,
                    "Site" => "https://yummyanime.com/",
                    "Description" => "Сайт с самым лучшим аниме в мире!"
                ),
                array(
                    "Year" => 2018,
                    "Site" => "https://myshows.me/",
                    "Description" => "Сайт с самыми лучшими сериалами в мире!"
                )
            );
        }
    }
?>