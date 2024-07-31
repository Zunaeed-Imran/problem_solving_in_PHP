<?php
// topic: explode funcion using list variable.
//  we are gonna use list function.
// we don't use foreach loop this time.

$data = "foo:*:1000:1080::/home/foo:/bin/sh";


list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);

echo "user :{$user}" . "\n";
echo "password: {$pass}" . "\n";
echo "uid: {$uid}" . "\n";
echo "gid: {$gid}" . "\n";
echo "gecos: {$gecos}" . "\n";
echo "home: {$home}" . "\n";
echo "shell: {$shell}" . "\n";


//  we use :: for $gecos because we don't want value in that variable

?>
