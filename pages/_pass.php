<?php

class Login {
    private $name = 'AdminDPO';
    private $password = '3%d?*HhZaeMIrz74~%';
    private $hash = '7d4c29d6754243d0075a00c4c5bb2a46';
    public function getName() {
        return $this->name;
    }
    public function getPassword() {
        return $this->password;
    }
}

$login = new Login;
if (isset($_POST['name'])) {
    if ($_POST['name'] == $login->getName() && $_POST['password'] == $login->getPassword()) {
        ?>
<form action="login.php" method="POST">
    <input type="text" value=<?php  ?>>
    <button type="submit"></button>
</form>
<?php
    }
    else header ('Location: ../index.php');
}