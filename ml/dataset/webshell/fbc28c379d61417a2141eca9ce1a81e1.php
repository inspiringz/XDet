<?php
$command="id\npwd\n";
$descriptorspec = array(
	0 => array('pipe', 'r'),
	1 => array('pipe', 'w'),
	2 => array('pipe', 'w')
);
 
$resource = proc_open($command, $descriptorspec, $pipes, null, $_ENV);
if (is_resource($resource))
{
	fwrite($pipes[0], "pwd\n");
	$stdin = $pipes[0];
	$stdout = $pipes[1];
	$stderr = $pipes[2];
 
	while (! feof($stdout))
	{
		$retval .= fgets($stdout,1024);
	}
 
	while (! feof($stderr))
	{
		$error .= fgets($stderr);
	}
	fwrite($pipes[0], "pwd\n");
	$stdout = $pipes[1];
	$stderr = $pipes[2];
 
	while (! feof($stdout))
	{
		$retval .= fgets($stdout,1024);
	}
 
	while (! feof($stderr))
	{
		$error .= fgets($stderr);
	}
 
	fclose($stdin);
	fclose($stdout);
	fclose($stderr);
 
	$exit_code = proc_close($resource);
}
if (! empty($error))
	throw new Exception($error);
else
	echo $retval;
 
?>