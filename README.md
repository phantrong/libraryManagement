+giờ ae khi pull code từ develop về chỉ cần chạy: npm run development -- --watch
+anh em sẽ chỉ làm việc với folder resource không động đến file public:
-js, css, images, view viết hết ở resource
-js thì ae sẽ tạo folder trong admin rồi tạo file index,js ->vd ae tạo folder là test và trong test sẽ tạo file index.js 
 thì gọi tên sẽ là : asset('js/admin/test.js')  *****ae chú ý
-css thì ae sẽ viết trong folder scss và tạo file .scss. và ae chú ý là khi tạo 1 file .scss, ở trong view ae phải thêm mỗi đầu html 1 tên class riêng và trong file .scss ae sẽ viết tất cả css bọc trong class mà ae tạo (ae xem cấu trúc file scss tôi đã viết)
 -> vd tạo tên test.scss -> teen gọi : asset('css/test.css')
-mỗi lần ae tạo mới 1 file css, hay js ae sẽ chạy lại câu lệnh : npm run development -- --watch
(còn sửa hay thêm thì k cần)
