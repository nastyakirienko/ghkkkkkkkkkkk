<php
        function getUniqueStrings($inputArray) {
        $resultArray = array_unique($inputArray);
return array_values($resultArray);
}

$inputArray = array("apple", "banana", "orange", "apple", "kiwi", "banana");
$resultArray = getUniqueStrings($inputArray);
print_r($resultArray);




