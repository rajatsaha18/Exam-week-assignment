<?php 

$strings = ["Hello", "World", "PHP", "Programming"];

// vowel count
function vowelCount($string)
{
    $vowels = ['a','e','i','o','u'];
    $vowelCount = 0;
   
    for($i = 0; $i < strlen($string); $i++)
    {
        if(in_array($string[$i], $vowels))
        {
            $vowelCount++; // here count vowel
        }
    }
    return $vowelCount;
}

// reverse string
function reverseString($string)
{
    $strArr = str_split($string); // str to array character by character
    $revArr = [];
    for($i = (count($strArr) - 1); $i >= 0; $i--)
    {
        $revArr[] = $strArr[$i]; // array reverse
    }
    $revStr = implode('', $revArr); // convert reverse array to string
    return $revStr;
}
// one by one
foreach($strings as $string)
{  
$result = vowelCount($string);
$reverseStr = reverseString($string);
echo "Original String : " . $string . "," . " Vowel Count : " . $result . "," . " Reverse String : " . $reverseStr . "<br>";
}




?>