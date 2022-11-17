# _CRUD Post_

## Cek Ulang Fitur CRUD User

1. Buka folder `cms`, lalu folder `users` yang sudah dibuat di tutorial [2_crud_user](../2_crud_user)
2. Cek ulang semua fitur ini:<br>
    i. Login
    ii. Logout
    iii. Lihat data user
    iv. Tambah data user
    v. Ubah data user
    vi. Hapus data user

## Fitur 'Melihat Daftar Post'

1. Buat folder `posts` di dalam folder `cms`<br>
![posts_folder](./assets/posts_folder.png)
2. Tambah Posts ke dalam `navbar.php`, sehingga muncul seperti ini<br>
![posts_menu](./assets/posts_menu.png)
3. Buka phpmyadmin, lalu isi table `posts` dengan 1 baris data bebas<br>
![posts_phpmyadmin](./assets/posts_phpmyadmin.png)
4. Salin file `index.php` dari folder `users` ke dalam folder `posts`
5. Ubah isi `index.php` dalam folder `posts`, agar bisa menampilkan data berikut ini<br>
![posts_php](./assets/posts_php.png)

## Fitur 'Menambahkan Post'
1. Salin file `create.php` dari folder `users` ke dalam folder `posts`
2. Ubah isi `create.php` dalam folder `posts`, agar bisa menambahkan data baru<br>
![posts_add_form](./assets/posts_add_form.png)
![posts_add_table](./assets/posts_add_table.png)

## Fitur 'Mengubah Post'
1. Salin file `edit.php` dan `update.php` dari folder `users` ke dalam folder `posts`
2. Ubah isi `edit.php` dan `update.php` dalam folder `posts`, agar bisa mengubah post<br>
![posts_edit_form](./assets/posts_edit_form.png)
![post_edit_form_2](./assets/post_edit_form_2.png)
![post_edit_table](./assets/post_edit_table.png)

