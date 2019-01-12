<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Login</title>
    <style>
    body{
      margin: 0;
        padding: 0;
        background-image: url(2.jpg);
        background-size: cover;
        background-attachment: fixed;
        font-family: sans-serif;
    }
    h1{
      margin: 0;
        padding: 0 0 20px;
        color: black;
        text-align: center;
    }
    .login{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 350px;
        height: 500px;
        padding: 80px 40px;
        box-sizing: border-box;
        background: rgba(192,192,192,0.3);
        border-radius: 5px;
      }
      .login input{
        width: 100%;
        margin-bottom: 20px;
      }
      .login input[type="text"]{
        border: none;
          border-bottom: 1px solid #000;
          background: transparent;
          outline: none;
          height: 40px;
          color: #000;
          font-size: 18px;
      }
      .login input[type="password"]{
        border: none;
        border-bottom: 1px solid #000;
        background: transparent;
        outline: none;
        height: 40px;
        color: #000;
        font-size: 18px;
      }
      ::pleaceholder{
        color: rgba(255, 255, 255, 0.5);
      }
      .login input[type="submit"]{
        border: none;
        border-radius: 10px;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
        background: #000;
      }
      .login input[type="submit"]:hover{
        color: #000 ;
        background: rgba(254, 222, 173, 0.5);
        transition: 0.2s;
      }
      a {
        text-decoration: none;
        color:#1F618D;
      }
    </style>
  </head>
  <body>
    <div class="login.php">
          <form class="" action="login.php" method="post">
            <table>
              <tr>
            <h1>Login</h1>
            <label for="" style="font-wight: bold; font-size: 20px">Username :</label>
              <input type="text" name="username">
              <br> </br>

            <label for="" style="font-wight: bold; font-size: 20px">Password :</label>
            <input type="password" name="password">
            <br> </br>

            <input type="submit" name="btnSimpan" value="LOGIN" style="font-weight: bold">
            </form>
        </div>
    </section>
  </body>
</html>
