# Simple_MVC_Project
My attempt to create simple MVC project on PHP without any frameworks.  

core/route.php - класс, который запускает методы контроллеров. Изначально будет вызываться controller = Main, action = inex  
Если в строке URL был введен какой-то маршрут, то он разбивается при помощи метода explode(), и уже вызывается контроллер и экшн исходя из URL. Например : localhost/Article/Show. Будет создан экземпляр контроллер = Article и вызван метод Show.  

