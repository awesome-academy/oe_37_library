<?php

return [
    'home' => 'Trang quản lý',
    'date_format' => 'd/m/yy',
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
        'name_col' => 'Tên tác giả',
        'avatar_col' => 'Ảnh',
        'desc_col' => 'Thông tin tác giả',
    ],
    'author_form' => [
        'title_add_form' => 'Thêm tác giả',
        'title_edit_form' => 'Sửa tác giả',
        'label_name' => 'Tên tác giả:',
        'label_avatar' => 'Ảnh:',
        'label_desc' => 'Thông tin tác giả: '
    ],
    'validate_author' => [
        'name_required' => 'Không được để trống tên tác giả!',
        'name_unique' => 'Tên tác giả đã tồn tại!',
        'author_desc' => 'Không được để trống thông tin tác giả!',
        'author_avatar' => 'Không để ảnh trống',
    ],
    'actions' => [
        'new' => '+ Thêm mới',
        'edit' => 'Sửa',
        'delete' => 'Xóa',
    ],
    'publisher_table' => [
        'title_table' => 'Danh sách nhà xuất bản',
        'id_col' => 'ID',
        'name_col' => 'Tên nhà xuất bản',
        'logo_col' => 'Logo',
        'desc_col' => 'Thông tin nhà xuất bản',
    ],
    'publisher_form' => [
        'title_add_form' => 'Thêm Nhà xuất bản',
        'title_edit_form' => 'Sửa Nhà xuất bản',
        'label_name' => 'Tên Nhà xuất bản:',
        'label_avatar' => 'Logo:',
        'label_desc' => 'Thông tin Nhà xuất bản: '
    ],
    'validate_publisher' => [
        'name_required' => 'Không được để trống tên Nhà xuất bản!',
        'name_unique' => 'Tên Nhà xuất bản đã tồn tại!',
        'pub_desc' => 'Không được để trống thông tin Nhà xuất bản!',
        'pub_logo' => 'Không để ảnh trống',
    ],
];
