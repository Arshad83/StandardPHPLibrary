<?php

$files=new RecursiveDirectoryIterator('common');

/**
* Parent directory of Recursive Directory Iterator is 
* FilesystemIterator.
*/
$files->setFlags(FilesystemIterator::SKIP_DOTS| FilesystemIterator::UNIX_PATHS);
// Iterator for RecursiveIterator
// RecursiveDirectory display files of one dirctory level
// RecursiveIterator display files of Multiple directories and deeper level directories.
//$files=new RecursiveIteratorIterator($files);
// If you  directory contents and inside directory contents then  
$files=new RecursiveIteratorIterator($files,RecursiveIteratorIterator::SELF_FIRST);
$files->setMaxDepth(1);
foreach ($files as $file) {
	echo $file.'<br/>';	
}