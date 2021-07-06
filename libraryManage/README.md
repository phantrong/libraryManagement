Các bước để chạy:
- Lấy link git, git clone để tạo thư mục trong htdocs của xampp
- cài composer link: getcomposer.org
- git bash thư mục vừa clone hoặc chạy terminal của vs: chạy các lệnh:
+ npm install
+ composer install
+ composer update
(nếu bị lỗi 500) chạy :
+ cp .env.example .env
+ php artisan key:generate
+ php artisan config:cache

-> php artisan serve
- sau đó chạy lệnh: php artisan serve -> ra local của web mình

- tạo nhánh mới từ develop
+ git checkout develop (để ch sang nhánh develop)
+ git pull (load, up lại nhành develop)
+ git checkout -b tên-nhánh (tạo nhánh tên : tên-nhánh  giống develop)
