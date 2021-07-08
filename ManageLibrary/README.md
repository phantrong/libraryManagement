1. Các bước để chạy:
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

2. quan trọng**** k được code ở nhánh develop, nếu lỡ thay đổi 1 số thứ ở develop thì chạy:
+ git checkout . (quay lại develop như mới pull về)

3. tạo nhánh mới từ develop 
+ git checkout develop (để ch sang nhánh develop)
+ git pull (load, up lại nhành develop)
+ git checkout -b tên-nhánh (tạo nhánh tên : tên-nhánh  giống develop)
-> code trên nhánh đó

3. push code lên git, tạo request:
+ git add .
+ git commit - m "message"
+ git push origin HEAD -f
-> sau đó lên git tạo request

4. sau mỗi lần tôi merge code của ae, thì ae về vscode, chuyển về nhánh develop, rồi pull lại code về -> code sẽ thay đổi như ae đã code:
+ git checkout develop (chuyển sang nhánh develop)
+ git pull origin HEAD (lấy code về)
-> sau đó ae lại tạo và chuyển sang nhánh mới để code rồi chạy:
+ npm run watch (để load js)
+ php artisan serve (để vào link local)


****Tôi mới thêm các phần ở component : (08/07)
- các file .js ở component là các file ae sẽ viết react
- ae vào thư mục routes, mở file web.php là sẽ thấy các đường dẫn để mở ở local
- trong resources/views có các file .blade.php ae để ý các id để viết vào file react -> view đc
