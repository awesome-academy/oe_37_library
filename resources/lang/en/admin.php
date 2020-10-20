<?php

return [
    'home' => 'Dashboard',
    'date_format' => 'm/d/yy',
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
        'create_success' => 'Create category success'
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
        'author' => 'search author with name, description, updated day,...'
    ],
];
