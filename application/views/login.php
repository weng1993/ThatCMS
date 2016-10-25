<h2>Login Page</h2>

<?php echo validation_errors(); ?>
<?php echo form_open('login/index'); ?>

    <label for="Username">Username</label>
    <input type="input" name="Username" /><br />

    <label for="Password">Password</label>  
    <input type="input" name="Password" /><br />

    <input type="submit" name="submit" value="Login" />

</form>