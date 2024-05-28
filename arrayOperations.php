<!-- 22.Write a PHP program to create an array and store 10 names in that array. Now Do the following operations:, Display the contents using for each statement., Display the array in  a sorted order., Display the array without duplicate elements., Remove the last element and display., Display the array in reverse order., Insert a new element in a specific position. , Search and find out position of an element from array. -->

<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .container h2 {
            margin-top: 0;
        }
        .container p {
            margin-bottom: 10px;
        }
        .container input[type="text"] {
            width: 80%;
            padding: 5px;
            margin-bottom: 10px;
        }
        .container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function displayContents(names) {
            var result = "Array Contents: ";
            for (var i = 0; i < names.length; i++) {
                result += names[i] + ", ";
            }
            document.getElementById('output').innerHTML = result;
        }

        function displaySorted(names) {
            var sortedNames = names.slice().sort();
            document.getElementById('output').innerHTML = "Sorted Array: " + sortedNames.join(", ");
        }

        function displayWithoutDuplicates(names) {
            var uniqueNames = [...new Set(names)];
            document.getElementById('output').innerHTML = "Array without Duplicates: " + uniqueNames.join(", ");
        }

        function removeLastElement(names) {
            names.pop();
            document.getElementById('output').innerHTML = "Array after removing last element: " + names.join(", ");
        }

        function displayReverse(names) {
            var reversedNames = names.slice().reverse();
            document.getElementById('output').innerHTML = "Array in Reverse Order: " + reversedNames.join(", ");
        }

        function insertElement(names, position, element) {
            names.splice(position - 1, 0, element);
            document.getElementById('output').innerHTML = "Array after inserting '" + element + "' at position " + position + ": " + names.join(", ");
        }

        function searchElement(names, element) {
            var position = names.indexOf(element);
            if (position !== -1) {
                document.getElementById('output').innerHTML = "Element '" + element + "' found at position " + (position + 1);
            } else {
                document.getElementById('output').innerHTML = "Element '" + element + "' not found in the array";
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Array Operations</h2>
        <form onsubmit="return false;">
            <input type="text" id="name" placeholder="Enter a Name">
            <input type="submit" value="Add Name" onclick="addName()">
        </form>
        <button onclick="displayContents(names)">Display Contents</button>
        <button onclick="displaySorted(names)">Display Sorted</button>
        <button onclick="displayWithoutDuplicates(names)">Display without Duplicates</button>
        <button onclick="removeLastElement(names)">Remove Last Element</button>
        <button onclick="displayReverse(names)">Display in Reverse Order</button>
        <input type="text" id="newPosition" placeholder="Enter Position">
        <input type="text" id="newElement" placeholder="Enter New Element">
        <button onclick="insertElement(names, document.getElementById('newPosition').value, document.getElementById('newElement').value)">Insert New Element</button>
        <input type="text" id="searchElement" placeholder="Enter Element to Search">
        <button onclick="searchElement(names, document.getElementById('searchElement').value)">Search Element</button>
        <p id="output"></p>
    </div>

    <script>
        var names = []; // Array to store names

        function addName() {
            var name = document.getElementById('name').value.trim();
            if (name !== '') {
                names.push(name);
                document.getElementById('name').value = '';
                document.getElementById('output').innerHTML = "Name added successfully!";
            } else {
                document.getElementById('output').innerHTML = "Please enter a valid name!";
            }
        }
    </script>
</body>
</html>