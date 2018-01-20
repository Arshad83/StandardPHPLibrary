<?php

$dir =new DirectoryIterator('common/images');
foreach ($dir as $key=> $file) {
	//var_dump($file);
	//if(is_file($file))
	if($file->isFile())
	//echo $key.":".$file->getPathname().'<br/>';
		// If you want to save into array,you should clone it.
		$files[]=clone $file;
	
}
echo $files[1]->getFilename();