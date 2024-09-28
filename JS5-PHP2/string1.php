<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipiscing elit. 
    Voluptatem reprehenderit nobis veritatis commodi fugiat molestias impedit? 
    Unde ipsam voluptatum corrupti optio it.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>