<html>
<head>
    <title>Data Konsumen</title>
</head>
<style type="text/css" scoped>

</style>
<body>
    <form action="action_register.php" method="post">
        <table>
            <tr>
                <td><p>Nim</p></td>
                <td><input name="nim" placeholder="nim" type="number"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td><p>Nama</p></td>
                <td><input name="nama" placeholder="nama" type="text"></td>
            </tr>
        </table>
        <table>
            <tr>
                <td><p>Tanggal Lahir</p></td>
                <td>
                    <select name="tgl">
                        <?php
                            for ($i = 0; $i<=31; $i++){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="bln">
                        <?php
                        for ($i = 0; $i<=12; $i++){
                            echo "<option  value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <select name="thn">
                        <?php
                        for ($i = 1947; $i<=2100; $i++){
                            echo "<option value=".$i.">$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    Jenis Kelamin
                    <input id="laki_laki" name="jenis_kelamin" type="radio" value="laki-laki"/><span>Laki-laki</span>
                    <input id="perempuan" name="jenis_kelamin" type="radio" value="perempuan"/><span>Perempuan</span>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                alamat
                <textarea name="alamat"></textarea>

            </tr>
        </table>
        <table>
            <tr>
                <td>
                    Setuju
                    <label><input type="checkbox" name="status"/> setuju</label>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <input type="submit" name="selesai">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>