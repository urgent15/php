<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Operations</title>
</head>
<body>
    <?php
    // Create an array and store 10 names
    $names = ["Alice", "Bob", "Charlie", "David", "Eve", "Frank", "Grace", "Heidi", "Ivan", "Judy"];

    // Display the contents using foreach statement
    echo "<h3>Original Array:</h3>";
    foreach ($names as $name) {
        echo $name . "<br>";
    }

    // Display the array in sorted order
    $sortedNames = $names;
    sort($sortedNames);
    echo "<h3>Sorted Array:</h3>";
    foreach ($sortedNames as $name) {
        echo $name . "<br>";
    }

    // Display the array without the duplicate elements
    $uniqueNames = array_unique($names);
    echo "<h3>Array without Duplicates:</h3>";
    foreach ($uniqueNames as $name) {
        echo $name . "<br>";
    }

    // Remove the last element and display
    $namesWithoutLast = $names;
    array_pop($namesWithoutLast);
    echo "<h3>Array after Removing Last Element:</h3>";
    foreach ($namesWithoutLast as $name) {
        echo $name . "<br>";
    }

    // Display the array in reverse order
    $reversedNames = array_reverse($names);
    echo "<h3>Array in Reverse Order:</h3>";
    foreach ($reversedNames as $name) {
        echo $name . "<br>";
    }

    // Insert a new element in a specified position
    $namesWithNewElement = $names;
    $newElement = "Mallory";
    $position = 5; // Insert at position 5 (0-based index)
    array_splice($namesWithNewElement, $position, 0, $newElement);
    echo "<h3>Array after Inserting New Element at Position $position:</h3>";
    foreach ($namesWithNewElement as $name) {
        echo $name . "<br>";
    }

    // Search and find out the position of an element from the array
    $searchElement = "Charlie";
    $position = array_search($searchElement, $names);
    if ($position !== false) {
        echo "<h3>Position of '$searchElement' in the Array:</h3>";
        echo $searchElement . " is at position " . $position;
    } else {
        echo "<h3>'$searchElement' not found in the Array.</h3>";
    }
    ?>
</body>
</html>
