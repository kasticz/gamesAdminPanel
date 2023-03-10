Суть приложения: Пример простой административной панели на laravel с возможностью выполнения CRUD операций по отношению к пройденным Вами игр.


Использовано:
HTML
SCSS
PHP
Laravel
MySQL
Bootstrap 
Admin LTE


Реализовано:

1) В приложении представлены данные из 5 SQL таблиц данных: игры, разработчики, жанры, пользователи и промежуточная таблица игра-жанр.

2) Приложение позволяет читать, изменять, создавать и удалять описания игр.

3) Использованы особенности laravel: mirations, filter requests, services, policies, .blade файлы, middleware.

4) Внешний вид административной панели сделан с помощью Admin LTE + Bootstrap.

5) Есть 2 вида панели: с возожностью взаимодействовать со своими играми и панель в режиме админа, где можно изменять все игры.

6) Реализован фильтр по всем основным полям игр: названию, оценке, длине, дате выхода, разработчику и жанрам.

7) Авторизация реализована с помощью встроенного функционала laravel.


Для разработки приложения использовался Open Server 5.4.3 с модулем PHP 8.1 и MySQL "MariaDB-10.8-Win10".

Для запуска приложения нужно:
1) Обычный .env laravel файл c полем DB_DATABASE=gamesDB и соответствующая база данных в MySQL
2) 2 необходимых команды - npm run dev и php artisan serve

