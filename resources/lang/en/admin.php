<?php

return [
    'home' => 'Dashboard',
    'date_format' => 'm/d/yy',
    'borrow_date_format' => 'm/d/yy h:m',
    'categories' => 'Categories',
    'users' => 'Users',
    'edit_user' => 'Edit user',
    'validation' => [
        'required_fullname' => 'Name must be enter',
        'required_gender' => 'Gender must be chosen',
        'required_role' => 'The role must be chosen',
        'date_format' => 'Please enter the correct date format',
        'unique_email' => 'Email has been used by someone else',
        'before_date' => 'Birthday must be before today',
        'required_cate_name' => 'Category Name must be enter',
    ],
    'book' => [
        'create' => 'New Book',
        'edit' => 'Edit Book',
        'name' => 'Title',
        'thumbnail' => 'Thumbnail',
        'description' => 'Description',
        'quantity' => 'Quantity',
        'create_success' => 'Create success',
        'create_error' => 'Create failed',
        'update_success' => 'Update success',
        'update_error' => 'Update failed',
        'delete_success' => 'Delete success',
        'delete_error' => 'Delete failed',
        'title' => 'Title',
        'category' => 'Category',
        'author' => 'Author',
        'publisher' => 'Publisher',
    ],
    'category' => [
        'create' => 'Create new',
        'name' => 'Category Name',
        'description' => 'Description',
        'create' => 'Create',
        'parent' => 'Parent',
        'edit' => 'Edit',
    ],
    'category_message' => [
        'edit_success' => 'Edit success',
        'not_found' => 'Category not found',
        'create_success' => 'Create category success',
        'del_success' => 'Delete success',
    ],
    'user' => [
        'fullname' => 'Full name',
        'email' => 'Email',
        'birthday' => 'Birthday',
        'phone' => 'Phone number',
        'username' => 'Username',
        'gender' => 'Gender',
        'created_at' => 'Created At',
        'role' => 'Role',
        'admin_role' => 'Admin',
        'user_role' => 'User'
    ],
    'user_message' => [
        'del_success' => 'Delete success',
        'del_error' => 'Delete failed',
        'not_found' => 'User not found',
        'edit_success' => 'Edit success'
    ],
    'authors' => 'Authors',
    'publishers' => 'Publishers',
    'books' => 'Books',
    'borrows' => 'Borrows',
    'reviews' => 'Reviews',
    'author_table' => [
        'title_table' => 'List Authors',
        'id_col' => 'ID',
        'name_col' => 'Name',
        'avatar_col' => 'Avatar',
        'desc_col' => 'Author description',
    ],
    'author_form' => [
        'title_add_form' => 'Add author',
        'title_edit_form' => 'Edit author',
        'label_name' => 'Author name:',
        'label_avatar' => 'Avartar:',
        'label_desc' => 'Description:',
    ],
    'validate_author' => [
        'name_required' => 'Do not leave the login field blank',
        'name_unique' => 'Author name already exists',
        'author_desc' => 'Do not leave the login field blank',
        'author_avatar' => 'Do not leave the image',
    ],
    'actions' => [
        'new' => 'New',
        'edit' => 'Edit',
        'delete' => 'Delete',
    ],
    'publisher_table' => [
        'title_table' => 'List Publishers',
        'id_col' => 'ID',
        'name_col' => 'Name',
        'logo_col' => 'Logo',
        'desc_col' => 'Publisher description',
    ],
    'publisher_form' => [
        'title_add_form' => 'Add publisher',
        'title_edit_form' => 'Edit publisher',
        'label_name' => 'Publisher name:',
        'label_avatar' => 'Logo:',
        'label_desc' => 'Publisher description:'
    ],
    'validate_publisher' => [
        'name_required' => 'Do not leave the login field blank',
        'name_unique' => 'Publisher name already exists',
        'pub_desc' => 'Do not leave the login field blank',
        'pub_logo' => 'Do not leave the image',
    ],
    'publisherExport' => [
        'id' => 'ID',
        'name' => 'Publisher Name',
        'desc' => 'Publisher Description',
        'logo' => 'Logo',
    ],
    'search' => [
        'publisher' => 'search publisher with name, description, updated day,...',
        'author' => 'search author with name, description, updated day,...',
        'user' => 'search user with name...',
        'category' => 'search category with name...',
        'reveiew' => 'search user or book name ...',
    ],
    'review_table' => [
        'id' => 'ID',
        'user_col' => 'Name of user',
        'book_col' => 'Name of book',
        'content_col' => 'Comments',
        'rate_col' => 'Rating',
        'date_col' => 'Time',
    ],
    'borrow_table' => [
        'title_table' => 'Manage borrow book',
        'id_col' => 'ID',
        'name_col' => 'Borrower',
        'book_col' => 'Book name',
        'book_image' => 'Book image',
        'borrow_date' => 'Borrow date',
        'return_date' => 'Return date',
        'borr_status' => 'Status',
        'request' => 'Requesting',
        'borrowing' => 'Borrowing',
        'paid' => 'Paid',
        'note' => 'Note',
        'delay' => 'number of days late: ',
        'overdue' => 'Overdue but not returned the book',
    ],
];
