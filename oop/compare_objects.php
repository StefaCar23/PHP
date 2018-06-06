<?php

    class Box{
        public $name = 'box';
    }
    
    $box = new Box;
    
    $box_reference = $box;
    $box_clone = clone $box;
    $box_modified = clone $box;
    $box_modified->name = 'changed box';
    $another_box = new Box;
    
    //uporedjujemo ove promenjive, comperison ==
    echo "Reference: " . ($box == $box_reference ? 'T' : 'F') . "<Br />";
    echo "Cloned: " . ($box == $box_clone ? 'T' : 'F') . "<Br />";
    echo "Modified: " . ($box == $box_modified ? 'T' : 'F') . "<Br />";
    echo "Another: " . ($box == $another_box ? 'T' : 'F') . "<Br />";
    echo "<hr />";
    //uporedjujemo ove promenjive, identifier ===
    echo "Reference: " . ($box === $box_reference ? 'T' : 'F') . "<Br />";
    echo "Cloned: " . ($box === $box_clone ? 'T' : 'F') . "<Br />";
    echo "Modified: " . ($box === $box_modified ? 'T' : 'F') . "<Br />";
    echo "Another: " . ($box === $another_box ? 'T' : 'F') . "<Br />";

