<?php
// File path where we will work with the file
$file = "example.txt";

// STEP 1: Write data to file (if file doesn't exist, it will create it)
$data = "Hello, this is a PHP File I/O example!\n";
$data .= "This is the second line.\n";
$data .= "Third line with PHP File I/O functions.\n";

// Open file in write mode ('w') - Creates or overwrites the file
$fileHandle = fopen($file, "w");
if ($fileHandle) {
    fwrite($fileHandle, $data); // Writing to the file
    fclose($fileHandle);        // Closing the file after writing
    echo " Data written to file: $file <br>";
} else {
    echo " Failed to open the file for writing. <br>";
}

// STEP 2: Read the file content using `fread()` (Reading the entire file)
$fileHandle = fopen($file, "r");
if ($fileHandle) {
    $fileContent = fread($fileHandle, filesize($file)); // Reading the entire file
    fclose($fileHandle);
    echo "<strong>File Content using fread():</strong><br>$fileContent <br>";
} else {
    echo " Failed to open the file for reading. <br>";
}

// STEP 3: Append data to the file using `fwrite()`
$appendData = "\nAppending new data to the file with `fwrite()`.\n";

// Open file in append mode ('a') - Will not overwrite, but add at the end
$fileHandle = fopen($file, "a");
if ($fileHandle) {
    fwrite($fileHandle, $appendData); // Appending data to the file
    fclose($fileHandle);
    echo " Data appended to the file: $file <br>";
} else {
    echo " Failed to open the file for appending. <br>";
}

// STEP 4: Read file line-by-line using `fgets()`
echo "<br><strong>Reading File Line-by-Line using `fgets()`:</strong><br>";

$fileHandle = fopen($file, "r");
if ($fileHandle) {
    while ($line = fgets($fileHandle)) { // Read one line at a time
        echo $line . "<br>"; // Output each line
    }
    fclose($fileHandle);
} else {
    echo " Failed to open the file for reading line-by-line. <br>";
}

// STEP 5: Read one character at a time using `fgetc()`
echo "<br><strong>Reading File Character-by-Character using `fgetc()`:</strong><br>";

$fileHandle = fopen($file, "r");
if ($fileHandle) {
    while (($char = fgetc($fileHandle)) !== false) { // Read one character at a time
        echo $char; // Output each character
    }
    fclose($fileHandle);
} else {
    echo "Failed to open the file for reading character-by-character. <br>";
}
?>
