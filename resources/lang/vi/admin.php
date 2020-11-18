<?php

return [
    'home' => 'Trang quản lý',
    'date_format' => 'd/m/yy',
    'borrow_date_format' => 'm/d/yy h:m',
    'categories' => 'Danh mục',
    'users' => 'Người dùng',
    'edit_user' => 'Sửa Người dùng',
    'validation' => [
        'required_fullname' => 'Tên phải được nhập',
        'required_gender' => 'Giới tính phải được chọn',
        'required_role' => 'Vai trò phải được chọn',
        'date_format' => 'Hãy nhập đúng định dạng ngày tháng',
        'unique_email' => 'Email đã được dùng bởi người khác',
        'before_date' => 'Sinh nhật phải trước ngày hôm nay',
        'required_cate_name' => 'Tên danh mục không được để trống',
    ],
    'book' => [
        'create' => 'Thêm sách mới',
        'edit' => 'Sửa sách',
        'name' => 'Tiêu đề',
        'thumbnail' => 'Ảnh bìa',
        'description' => 'Mô tả',
        'quantity' => 'Số lượng',
        'create_success' => 'Thêm sách mới thành công',
        'create_error' => 'Thêm sách mới thất bại',
        'update_success' => 'Cập nhật thành công',
        'update_error' => 'Cập nhật thất bại',
        'delete_success' => 'Xóa thành công',
        'delete_error' => 'Xóa thất bại',
        'title' => 'Tiêu đề',
        'category' => 'Danh mục',
        'author' => 'Tác giả',
        'publisher' => 'Nhà Xuất bản',
        
    ],
    'category' => [
        'create' => 'Tạo danh mục mới',
        'name' => 'Tên danh mục',
        'description' => 'Mô tả',
        'create' => 'Tạo danh mục',
        'parent' => 'Danh mục mẹ',
        'edit' => 'Sửa danh mục',
    ],
    'category_message' => [
        'edit_success' => 'Sửa thành công',
        'not_found' => 'Không tìm thấy danh mục',
        'create_success' => 'Tạo danh mục thành công',
        'del_success' => 'Xóa danh mục thành công',
    ],
    'user' => [
        'fullname' => 'Họ & tên',
        'email' => 'Email',
        'birthday' => 'Sinh nhật',
        'phone' => 'Số điện thoại',
        'username' => 'Tên đăng nhập',
        'gender' => 'Giới tính',
        'created_at' => 'Ngày tạo',
        'role' => 'Vai trò',
        'admin_role' => 'Admin',
        'user_role' => 'Người dùng'
    ],
    'user_message' => [
        'del_success' => 'Xoá thành công',
        'del_error' => 'Xoá thất bại',
        'not_found' => 'Không tìm thấy người dùng',
        'edit_success' => 'Sửa thành công'
    ],
    'authors' => 'Tác giả',
    'publishers' => 'Nhà xuất bản',
    'books' => 'Sách',
    'borrows' => 'Mượn - trả',
    'reviews' => 'Đánh giá - bình luận',
    'author_table' => [
        'title_table' => 'Danh sách tác giả',
        'id_col' => 'ID',
        'name_col' => 'Tên',
        'avatar_col' => 'Ảnh',
        'desc_col' => 'Thông tin',
    ],
    'author_form' => [
        'title_add_form' => 'Thêm tác giả',
        'title_edit_form' => 'Sửa tác giả',
        'label_name' => 'Tên :',
        'label_avatar' => 'Ảnh:',
        'label_desc' => 'Thông tin: '
    ],
    'validate_author' => [
        'name_required' => 'Không được để trống tên tác giả!',
        'name_unique' => 'Tên tác giả đã tồn tại!',
        'author_desc' => 'Không được để trống thông tin tác giả!',
        'author_avatar' => 'Không để ảnh trống',
    ],
    'actions' => [
        'new' => 'Thêm',
        'edit' => 'Sửa',
        'delete' => 'Xóa',
    ],
    'publisher_table' => [
        'title_table' => 'Danh sách nhà xuất bản',
        'id_col' => 'ID',
        'name_col' => 'Tên',
        'logo_col' => 'Logo',
        'desc_col' => 'Thông tin',
    ],
    'publisher_form' => [
        'title_add_form' => 'Thêm Nhà xuất bản',
        'title_edit_form' => 'Sửa Nhà xuất bản',
        'label_name' => 'Tên:',
        'label_avatar' => 'Logo:',
        'label_desc' => 'Thông tin: '
    ],
    'validate_publisher' => [
        'name_required' => 'Không được để trống tên Nhà xuất bản!',
        'name_unique' => 'Tên Nhà xuất bản đã tồn tại!',
        'pub_desc' => 'Không được để trống thông tin Nhà xuất bản!',
        'pub_logo' => 'Không để ảnh trống',
    ],
    'publisherExport' => [
        'id' => 'ID',
        'name' => 'Tên nhà xuất bản',
        'desc' => 'Thông tin nhà xuất bản',
        'logo' => 'Logo',
    ],
    'search' => [
        'publisher' => 'tìm nhà xuất bản theo tên, thông tin, ngày tạo,...',
        'author' => 'tìm tác giả theo tên, thông tin, ngày tạo,...',
        'user' => 'tìm người dùng theo tên...',
        'category' => 'tìm danh mục theo tên ...',
        'review' => 'Tìm kiếm người dùng hoặc sách ...',
    ],
    'review_table' => [
        'id' => 'ID',
        'user_col' => 'Tên người dùng',
        'book_col' => 'Tên sách',
        'content_col' => 'Bình luận',
        'rate_col' => 'Đánh giá',
        'date_col' => 'Thời gian',
        'book' => 'Tìm sách theo tên ...',
    ],
    'borrow_table' => [
        'title_table' => 'Quản lý sách mượn',
        'id_col' => 'ID',
        'name_col' => 'Người mượn',
        'book_col' => 'Tên sách',
        'book_image' => 'Hình ảnh',
        'borrow_date' => 'Ngày mượn',
        'return_date' => 'Ngày trả',
        'borr_status' => 'Trạng thái',
        'request' => 'Đang chờ',
        'borrowing' => 'Đang mượn',
        'paid' => 'Đã trả',
        'note' => 'Ghi chú',
        'delay' => 'Số ngày trễ hạn: ',
        'overdue' => 'Quá hạn nhưng chưa trả sách',
    ],
    'chart' => [
        'month' => 'Tháng ',
        'users' => 'Người dùng theo tháng'
    ]
];
