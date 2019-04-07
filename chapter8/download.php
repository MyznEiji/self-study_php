<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
  header('HTTP/1.1 401 Unauthorized');
  header('WWW-Authenticate: Basic realm="SelfPHP"');
  print 'この画面へのアクセスは認められませんでした。';
  die();
} else {
  if ($_SERVER['PHP_AUTH_USER'] === 'admin_usr' &&
    $_SERVER['PHP_AUTH_PW'] === 'admin_pass') {
    print '正しく認証が行われました。';

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename = "flower.jpg"');
print file_get_contents('./doc/flower.jpg');
  } else {
    print 'ユーザ名、またはパスワードが間違っています。';
  }
}


