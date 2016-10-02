<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<body>
<form method=POST action="">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                                <label > <span style="color:#d9534f;"></span></label>
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    <label > <span style="color:#d9534f;"></span></label>
</div>
<div class="text-center">
    <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
</div>
</form>
</body>
</html>