<?php
// Values
$formEmail = filter_input(INPUT_POST, 'email');
$formPass = filter_input(INPUT_POST, 'pass');

// Defaults
$formEmail = (isset($formEmail)) ? $formEmail : '';
$formPass = (isset($formPass)) ? $formPass : '';
?>
<form class="form-horizontal" method = "post" action = "/todo_controller/index.php">
    <fieldset>

        <!-- Form Name -->
        <h3>Login Todo</h3>

        <!-- Email -->
        <div class="form-group">
            <label class="label" for="email">Email</label>
            <div class="div">
                <input id="email" name="email" type="email" class="emailinput">

            </div>
        </div>

        <!-- Password -->
        <div class="form-group">
            <label class="label" for="pass">Password</label>
            <div class="div">
                <input id="pass" name="pass" type="password" class="passinput">

            </div>
        </div>

        <!-- Submit -->
        <div class="form-group">
            <label class="label" for="submit"></label>
            <div class="div">
                <input name="submit" type="submit" value="Login">
            </div>
        </div>

    </fieldset>
</form>