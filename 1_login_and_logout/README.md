# _Login and Logout_

## _Coding_

1. Buka *folder lokasi instal XAMPP* (biasanya di `C:\xampp`, bisa berbeda-beda tiap komputer)
![folder_xampp](./xampp_1.png)
2. Buka folder `htdocs`
![folder_htdocs](./xampp_2.png)
3. Buat folder `cms` di dalam `htdocs`
4. Buka text editor (Visual Studio Code _atau_ Sublime Text)
5. Buka folder `cms` menggunakan _text editor_
![sublime](./sublime_text.png)
![vscode](./vscode.png)
6. Buat file-file berikut di folder `cms` mengikuti contoh di Github:<br>
    i. `koneksi.php`<br>
    ii. `login.php`<br>
    iii. `validasi.php`<br>
    iv. `session.php`, `navbar.php`, `index.php`<br>
    v. `logout.php`

## _Testing_

### Membuat user baru
1. Buat file `create_user.php` di folder `cms`, sesuai contoh di Github (folder `utilities`)
2. Edit bagian `$username` dan `$password` dengan username dan password sesuai keinginan
![edit_file_create_user](./edit_create_user.png)
3. Buka browser (Google Chrome, Edge, atau Firefox)
4. Buka alamat http://localhost/cms/create_user.php
5. Cek table `users` di phpmyadmin, seharusnya ada 1 data yang tersimpan
![users_phpmyadmin](./users_phpmyadmin.png)

### Tes login dan logout
1. Buka alamat http://localhost/cms/login.php
![login_page](./login_page.png)
2. Masukkan username dan password yang sudah tersimpan di phpmyadmin
3. Tekan Login.<br>
(_Note_: seharusnya akan muncul halaman `index.php`)
![index_page](./index_page.png)
4. Tekan Logout.<br>
(_Note_: seharusnya akan kembali ke halaman `login.php`)
5. Untuk tes keamanan, coba buka alamat http://localhost/cms/index.php setelah logout.<br>
(_Note_: Website yang aman, seharusnya tidak akan bisa membuka halaman `index.php` setelah logout.)