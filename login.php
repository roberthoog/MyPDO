<?php
$page_title = 'Login';
include_once('inc/header.php');



if ( isset($errors) && !empty($errors)) {
echo '<h1> Errors encountered  </h1>';
echo '<p class="errors">The following need correction:';

foreach($errors as $msg) {
    echo($msg);
    }
    echo 'Please try again';
}
?>
<h3>Login</h3>
<form action="" METHOD="POST">
    <div class="form-group">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Last name">
        </div>
    </div>
    </div>
    <button type="button" class="btn btn-dark">Do it!</button>
</form>
