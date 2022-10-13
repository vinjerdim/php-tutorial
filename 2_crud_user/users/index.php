<?php
include("../session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Aplikasi CMS</title>
</head>

<body>
    <?php
    include("../navbar.php");
    ?>
    <div>
        <div>
            <h1>Tambah User</h1>
            <form action="create.php" method="POST">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password_1"></td>
                    </tr>
                    <tr>
                        <td>Konfirmasi Password</td>
                        <td><input type="password" name="password_2"></td>
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>
                            <select name="level">
                                <option value="admin">Admin</option>
                                <option value="siswa">Siswa</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="SAVE">
                            <input type="reset" value="CLEAR">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <br>

        <?php
        include("../koneksi.php");
        $sql = "SELECT * FROM users";
        $hasil = $koneksi->query($sql);
        ?>
        <div>
            <h1>Data User</h1>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($data = $hasil->fetch_array()) :
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $data["username"] ?></td>
                            <td><?= $data["level"] ?></td>
                            <td>
                                <form action="edit.php" method="GET">
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <input type="submit" value="EDIT">
                                </form>
                            </td>
                            <td>
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    <input type="submit" value="DELETE">
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>