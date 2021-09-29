<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Hello World</title>

</head>
<body>
    <div id="container">
        <h1>Hello World<h1>
    </div>

    <hr>
    HTML Helper
    <?php echo br(3);
    ?>
    RMUTL<br>TAK

    <p>Heading</p>
    <?php echo heading("SATANG",1);?>
    <?php echo heading("SATANG",2);?>
    <?php echo heading("SATANG",3);?>
    <?php echo heading("SATANG",4);?>
    <?php echo heading("SATANG",5);?>
    <?php echo heading("SATANG",6);?>

    <p>nbs</p>
    <?php
        echo 'My Website';
        echo nbs(10);
        echo 'NALINEE';
    ?>

    <p>OL</p>
    <?php
        $list = array('Nalinee','Aonthong','Satang','Tak','Tak');
        echo ol($list);

        echo '<hr>';
        echo ul($list);
    ?>

</body>
</html>