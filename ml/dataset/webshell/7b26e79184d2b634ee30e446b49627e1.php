<?php
class select
{
var $sockets;

// 캯
function select($sockets)
{
$this->sockets = array();

foreach($sockets as $socket)
{
$this->add($socket);
}
}

function add($add_socket)
{
//array_push($this->sockets, $add_socket);
$this->sockets[] = $add_socket;
}

// ʱɾеԪ
function remove($remove_socket)
{
$tmp_sockets = array();

foreach($this->sockets as $socket)
{
if($remove_socket != $socket)
{
$tmp_sockets[] = $socket;
}
}

$this->sockets = $tmp_sockets;
}

// socketǷɶ볬ʱʱ䣬socket
function can_read($timeout)
{
$read = $this->sockets;
socket_select( $read, $write = NULL, $except = NULL, $timeout );
return $read;
}

// socketǷд볬ʱʱ䣬socket
function can_write($timeout)
{
$write = $this->sockets;
socket_select( $read = NULL, $write, $except = NULL, $timeout );
return $write;
}
}

// ҳʱ
set_time_limit(0);

// ʱݣ
ob_end_clean();
ob_implicit_flush(true);

if( !isset($_GET["listen_ip"]) )
{
exit;
}
if( $_GET["listen_ip"] == "" )
{
exit;
}

$listen_ip = $_GET["listen_ip"];
$listen_port = 80;

// socket
$listen_sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// ظ
socket_set_option($listen_sock, SOL_SOCKET, SO_REUSEADDR, 1);

// ȷָIPַȻȡ
socket_bind($listen_sock, $listen_ip, $listen_port);

// ʼ
socket_listen ($listen_sock);

echo "listen on ".htmlentities($listen_ip)." :".$listen_port."<br />";

// socket飬ʹselectѯ
$check_socks = array($listen_sock);

// ӳͻsocketͷsocket
// $socket_maps1ͻsocketΪkey
// $socket_maps2socketΪkey
// ڴ滻ٶȣҷ
$socket_maps1 = array( );
$socket_maps2 = array( );

// ʵselect
$select = new select( $check_socks );

while(true)
{
/*
print_r( $socket_maps );
print "<br />";
*/
// selectѯʱ2
foreach ($select->can_read(1) as $socket)
{
// listen_sockɶ˵
if( $socket == $listen_sock )
{
// ӣ뵽ѵ
$new_client = socket_accept($listen_sock);
$select->add($new_client);

socket_getpeername($new_client, $ip, $port);
echo "New client connected: $ip, $port<br />";

// ʵsocket
$server_sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($server_sock,"127.0.0.1", $listen_port);

// ʵsocketʵͻsocket֮ӳϵ
$socket_maps1[$new_client] = $server_sock;
$socket_maps2[$server_sock] = $new_client;

// ӵselectѯ
$select->add($server_sock);

// $listen_sockĿɶΪӣѾˡʱȥΪ濪ʼת
//select->remove( $listen_sock );
}

// socketɶʾҪת
else
{
// ȡݣʧѯsocketɾرsocket
$client_data = @socket_read($socket, 1024, PHP_NORMAL_READ);
if ($client_data === false)
{
socket_close( $socket );
$select->remove( $socket );
echo "client disconnected.<br />";

continue;
}

// socket$socket_maps1keyУ˵Ǵӿͻ˶
if( in_array( $socket, array_keys($socket_maps1) ) )
{
//echo "readed from client.<br />";
if( ! socket_write( $socket_maps1[$socket], $client_data ) )
{
socket_close( $socket );
socket_close( $socket_maps1[$socket] );
$select->remove( $socket );
$select->remove( $socket_maps1[$socket] );
print "Write to server error.<br />";
}
print htmlentities($client_data)."</b><br />";
}
// socket$socket_maps2keyУ˵Ǵweb
elseif( in_array( $socket, array_keys($socket_maps2) ) )
{
//echo "readed from server.<br />";
if( ! socket_write( $socket_maps2[$socket], $client_data ) )
{
socket_close( $socket );
socket_close( $socket_maps2[$socket] );
$select->remove( $socket );
$select->remove( $socket_maps2[$socket] );
print "Write to client error.<br />";
}
print htmlentities($client_data)."</b><br />";
}
}
}
}
?>