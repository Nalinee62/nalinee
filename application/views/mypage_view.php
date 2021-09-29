<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <title>Welcome to MY PAGE</title>

    </head>
    <body>
        <h1>My Page</h1>
        <a href="<?php echo site_url('Hello');?>">Link to Page Hello</a>

        <br>
        <a href="<?php echo site_url('Hello/index2');?>">Link to Page Hello index2</a>

        <br>
        <a href="<?php echo site_url('Welcome');?>">Link to Page Welcome</a>

        <br>
        <a href="<?php echo site_url('Welcome/index2');?>">Link to Page NALINEE</a>

    </body>
</html>