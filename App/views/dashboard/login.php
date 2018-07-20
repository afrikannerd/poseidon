<?php

/**
 * Description of login
 * Created on : Jun 29, 2018, 2:49:00 PM
 * @author afrikannerd <https://github.com/afrikannerd>
 * @version "0.1"
 */

$this->setTitle("Sunshine School | Login");
$this->open('head');
?>

<?php
$this->close();
$this->open('body');

?>
<form class="form admin-login col-md-offset-4" method="POST" action="/auth/login">
    <fieldset>
        <legend>Login</legend>
    <div class="form-group">
        <input type="text" name="user" class="form-control" placeholder="Username" required/>
    </div>
    <div class="form-group">
        <input type="password" name="pass" class="form-control" placeholder="password" required/>
    </div>

    <div class="form-group">
        <input type="submit" role="button" class="btn btn-md btn-primary" name="login" value="Login" />
    </div>

    </fieldset>
    <?php if(isset($data['error'])){ ?>
    <div class="alert alert-info">
        <?= $data['error']; ?>
    </div>
    <?php } ?>
</form>
<?php
$this->close();