<?php
/**
 * Created by PhpStorm.
 * User: WSF
 * Date: 04.04.2018
 * Time: 10:39
 */
$n = $_POST['file'];
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="downloaded.pdf"');
readfile($n);