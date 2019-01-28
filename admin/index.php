<form action="manage.php" method="post">

<input tabindex="1" name="user" type="text" maxlength="15" placeholder="username"/>
<input tabindex="2" name="password" type="password" maxlength="15" placeholder="password"/>
<input tabindex="3" name="submit" type="submit" value="login"/>

</form>

<?php
if (isset($_GET["pwd"]) && $_GET["pwd"] == 1) {
    echo "Credenziali errate";
}

?>