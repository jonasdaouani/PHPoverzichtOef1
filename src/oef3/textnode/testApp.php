<?php
require('.\TextNode.php');
$n= textnode\TextNode::makeNode("a");

$n->addNode("b");
$n->addNode("c");
$n->printAll();
echo "\n";
try {
    $n->printTextNodeAt(5);
}catch (Exception $exception){
    print $exception->getMessage();
}
