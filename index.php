<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN WITH DB</title>
</head>
<body>
    <h1>Silahkan login</h1>
    <?php
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "gagal"){
            ?>
            <script>
                alert("akun anda tidak terdaftar")
            </script>
            <?php

            echo "akun anda tidak terdaftar<br>";
            echo "silahkan daftar di sini<br>";
            echo "<a href='../regis/index.php'>daftar</a>";
            
        }
        
    }
        ?>
    <form action="proses.php" method="post">
        <div>
            <label>username</label>
            <input type="text" name="user">
        </div>
        <div>
            <label>password</label>
            <input type="password" name="pass">
        </div>
        <div>
            <input type="submit" value="LOG IN">
        </div>
    </form>
</body>
</html>