<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/main-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Login</title>
</head>
<?php
class Login {
    private $name = 'Admin';
    private $password = '3%d?*HhZaeMIrz74~%';
    private $hash = '7d4c29d6754243d0075a00c4c5bb2a46';
    public function getName() {
        return $this->name;
    }
    public function getPassword() {
        return $this->password;
    }
}
?>

<body class="loginBody">

    <?php
    if (isset($_POST['name']) && $_POST['name'] == $login->getName() && $_POST['password'] == $login->getPassword()) {
        
    }
?>





    <?php include_once('pages/_pass.php'); ?>
    <form class="form-outline login" action="DB/login" method="POST">
        <label class="form-label" for="form2Example1">Логин</label>
        <input name="name" type="text" id="form2Example1" class="form-control" />
        <label class="form-label" for="form2Example2">Пароль</label>
        <input name="password" type="password" id="form2Example2" class="form-control" />

        <button type="submit" class="btn btn-primary btn-block mb-4">Войти</button>
    </form>



    <script src="https://kit.fontawesome.com/e779950260.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    </script>
    <script src="js/script.js"></script>
</body>

</html>