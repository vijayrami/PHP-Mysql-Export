<?php
$zip = new ZipArchive();
$filename = "./create_new_file.zip"; // Give name of your newly created zip file.

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}
$zip->addFile("./large_file.sql"); // Give name of your large file which you want to be zipped.
echo "numfiles: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$zip->close();