<?php
$files=new FilesystemIterator('common/images',FilesystemIterator::UNIX_PATHS);

// getrealpath() displays files path in windows format `\` even though you used UNIX_PATHS. 
foreach ($files as $file) {
	if($file->getExtension()=='jpg')
	echo $file->getFilename(). ' is '.$file->getSize().' bytes '.' Its absolute path '.$file->getrealpath().'<br>';	
}