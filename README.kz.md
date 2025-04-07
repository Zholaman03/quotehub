# Бұл менің Laravel негізінде жасалған пет-проектім

# Не істейді? (Функциялар)
- Қолданушылар нақыл сөз ұсына алады
- Жаңа ұсынылған цитаталар `isactive = false` күйінде сақталады
- Тек **админ** оларды бекітіп, жариялай алады
- Қолданушы рөлдері: Admin, User [ Тестілеуге: (Admin) email: admin@gexample.com  password: admin123 | (User) email: user@gexample.com  password: user123 ]
- Категория және тіл фильтрация, іздеу жүйесі мүмкіндігі

  

##  Технологиялар

- PHP 8+
- Laravel 10+
- MySQL
- Blade шаблондары

#Локальді түрде орнату

git clone https://github.com/Zholaman03/quotehub.git
cd quotehub
composer install
cp .env.example .env
php artisan key:generate

# MySQL базасын баптап, сосын:
php artisan migrate --seed

php artisan serve

