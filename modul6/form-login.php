<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="kelas">
    <h1>L O G I N</h1>
    <Form action="login.php" method="post">
        <input id="nis" placeholder="NIS" type="text" name="nis"> <br>
        <input id="password" placeholder="Password" type="password" name="password"> <br>
        <input id="btnSimpan" type="submit" value="LOGIN">
    </Form>
  </div>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h3>Username dan Password salah</h3>';
        }
    }
    ?>

</body>
</html>
