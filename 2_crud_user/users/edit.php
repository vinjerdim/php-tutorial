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
        <?php
        include("../koneksi.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $hasil = $koneksi->query($sql);
        $data = $hasil->fetch_array();
        ?>
        <div>
            <h1>Edit User</h1>
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?= $id ?>">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="<?= $data['username'] ?>" readonly></td>
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
                                <?php foreach (array("admin", "siswa") as $level) : ?>
                                    <?php if ($data["level"] == $level) : ?>
                                        <option value="<?= $level ?>" selected><?= $level ?></option>
                                    <?php else : ?>
                                        <option value="<?= $level ?>"><?= $level ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
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
    </div>
</body>

</html>