<?php namespace textnode;

class TextNode
{
    private $nextNode;
    private $text;
    private static $nodesArray = array();
    private static $countInitialisations=0;

    private function __construct($text)
    {
        $this->nextNode = null;
        $this->text = $text;
    }

    public static function makeNode($text)
    {
        $textnode = new TextNode($text);
        self::$nodesArray[] = $textnode;
        self::$countInitialisations++;
        return $textnode;
    }

// de functie addNode voegt een TextNode toe op het einde van een keten van nodes
    public function addNode($text)
    {
        if ($this->nextNode == null) {
            $this->nextNode = self::makeNode($text);
        } else {
            $this->nextNode->addNode($text);
        }
    }

    public function printAll()
    {
        print($this->text);
        if ($this->nextNode != null) {
            $this->nextNode->printAll();
        }
    }

    // dit werkt dus want in testApp heeft de eerste textNode $n een array met al de nodes in
    public function printTextNodeAt($i){
        if($i< self::$countInitialisations && $i>=0){
            print self::$nodesArray[$i]->text;
        }else{
            throw new \Exception("$i is negatief of groter dan het aantal textNodes");
        }
    }
}