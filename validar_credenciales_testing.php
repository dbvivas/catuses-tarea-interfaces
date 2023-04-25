<?php
//https://www.phptutorial.net/php-tutorial/php-password_verify/

//$hash = '$2y$10$hnQY9vdyZUcwzg2CO7ykf.a4iI5ij4Pi5ZwySwplFJM7AKUNUVssO'; //---DEMO

$password = 'admin';
echo  password_hash($password, PASSWORD_DEFAULT);
echo "<br><br>";
$hash = '$2y$10$aEr7QyNiAbRSCz8/yund4eoUtEVsV2CjkyE7IUi0j6hMtMrMwkoCm';//--- ME MARCA ERROR
//buscando solucion al error: https://www.sitepoint.com/community/t/using-password-verify-returning-false-with-phpmyadmin-entry/305424

$hash = '$2y$10$HlgNThYXSiBOJMfqsBiyHenwa9Zqe0Jd/Jck6tUYENRs5EOvnwMLO';
$valid = password_verify('admin', $hash);

echo $valid ? 'Valid' : 'Not valid';
?>