# _Database_

## Membuat _database_

1. Buatlah database bernama `cms`
2. Buatlah table `users` dengan structure seperti berikut ini:
![table_users](./1_table_users.png)
    a. Set `AUTO_INCREMENT` untuk kolom `id`<br>
    b. Set `UNIQUE` untuk kolom `username`<br>
    c. Set tipe kolom `level` menjadi `ENUM`, edit ENUM values-nya menjadi `admin` dan `siswa`
    d. Set kolom `created_at` agar nilai _default_-nya `CURRENT_TIMESTAMP`<br>
    e. Set kolom `updated_at` agar nilai _default_-nya `NULL`<br>
    f. Set `on update CURRENT_TIMESTAMP` untuk kolom `updated_at`<br>
3. Buatlah table `posts` dengan structure seperti berikut ini:
![table_posts](./2_table_posts.png)
    a. Set `AUTO_INCREMENT` untuk kolom `id`<br>
    b. Set kolom `created_at` agar nilai _default_-nya `CURRENT_TIMESTAMP`<br>
    c. Set kolom `updated_at` agar nilai _default_-nya `NULL`<br>
    d. Set `on update CURRENT_TIMESTAMP` untuk kolom `updated_at`<br>
4. Atur _relationship_ antara table `posts` dan `users`
![relationship_posts](./3_foreign_key_posts.png)