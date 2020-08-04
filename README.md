# Sistem Informasi Perpustakaan
#cara instalasi
1. git clone https://github.com/Dhimas-Afdiat/RemidialProjectLaravel.git
2. composer install
3. copy file .env.example lalu rename menjadi .env
4. buat database pada phpMyAdmin
5. lalu pada file .env rubah "DB_DATABASE = laravel" (database name sesuai yang dibuat sebelumnya pada phpMyAdmin)
6. php artisan key:generate
7. php artisan db:seed
8. php artisan storage:link
9. php artisan serve
10. login email : admin@gmail.com password : 12345678
