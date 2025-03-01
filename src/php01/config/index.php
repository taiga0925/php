<?php

$name =htmlspecialchars($_POST["name"],ENT_QUOTES);
print "私の名前は".$name."<br/>";

$radio =htmlspecialchars($_POST["radio"],ENT_QUOTES);
print "ご希望商品名は". $radio . "ですね"."<br/>";

$number =htmlspecialchars($_POST["number"],ENT_QUOTES);
print "注文数は,". $number;
