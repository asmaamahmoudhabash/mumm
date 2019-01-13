
                                              mumm blog 
is ablog system which will provide user interface to browse and explore blog posts. it contains admin dashboard to add, edit, delete, and update posts and categories. 
Demo login info

user: asmaa@asmaa.com| password: 123456
Installation

git clone https://github.com/asmaamahmoudhabash/mumm.git
cd mumm
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed

database into db-backup folder


