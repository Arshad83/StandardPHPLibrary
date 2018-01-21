<?php

$csvfile=new SplFileObject('common/documents/data/cars_tab .csv');
$csvfile->setFlags(SplFileObject::READ_CSV);
//for csv tab file
$csvfile->setCsvControl("\t");
foreach ($csvfile as $line) {
	$cars[]=$line;
}
echo '<pre>';
print_r($cars);
echo '</pre>';