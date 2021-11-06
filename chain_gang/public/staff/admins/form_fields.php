<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($admin)) {
  redirect_to(url_for('/staff/admins/index.php'));
}
?>

<dl>
  <dt>First name</dt>
  <dd><input type="text" name="users[first_name]" value="<?php echo h($admin->first_name); ?>" /></dd>
</dl>

<dl>
  <dt>Last name</dt>
  <dd><input type="text" name="users[last_name]" value="<?php echo h($admin->last_name); ?>" /></dd>
</dl>

<dl>
  <dt>Email</dt>
  <dd><input type="text" name="users[email]" value="<?php echo h($admin->email); ?>" /></dd>
</dl>

<dl>
  <dt>Username</dt>
  <dd><input type="text" name="users[username]" value="<?php echo h($admin->username); ?>" /></dd>
</dl>

<dl>
  <dt>User Level</dt>
  <dd>
    <select name="users[user_level]">
      <option value=""></option>
      <option value="a" <?php if($admin->user_level == "a") { echo 'selected'; } ?>>a</option>
      <option value="m" <?php if($admin->user_level == "m") { echo 'selected'; } ?>>m</option>
    </select>
  </dd>
</dl>

<dl>
  <dt>Password</dt>
  <dd><input type="password" name="users[password]" value="" /></dd>
</dl>

<dl>
  <dt>Confirm Password</dt>
  <dd><input type="password" name="users[confirm_password]" value="" /></dd>
</dl>
