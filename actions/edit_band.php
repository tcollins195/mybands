<?php 
session_start();

// Read file into array
$lines = file('../data/bands.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['band_name']},{$_POST['band_genre']},{$_POST['band_numalbums']}";

// Create the string to write to the file
$data_string = implode("\n", $lines);

// Write the string to the file, overwriting the current contents
$f = fopen('../data/bands.csv', 'w'); // a+ for append
fwrite($f, $data_string);
fclose($f);

$_SESSION['message'] = 'Your band has been edited.';

// Redirect to the main page
header('Location:../?p=list_bands');
?>