# Sistem Informasi Perpustakaan
#cara instalasi
git clone https://github.com/Dhimas-Afdiat/RemidialProjectLaravel.git
composer install
copy file .env.example lalu rename menjadi .env
buat database pada phpMyAdmin
lalu pada file .env rubah "DB_DATABASE = laravel" (database name sesuai yang dibuat sebelumnya pada phpMyAdmin)
php artisan key:generate
php artisan db:seed
php artisan storage:link
php artisan serve
login email : admin@gmail.com password : 12345678
