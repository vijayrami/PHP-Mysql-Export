<?php 
function deleteDirectory($dir){
    $result = false;
    if ($handle = opendir("$dir")){
        $result = true;
        while ((($file=readdir($handle))!==false) && ($result)){
            if ($file!='.' && $file!='..'){
                if (is_dir("$dir/$file")){
                    $result = deleteDirectory("$dir/$file");
                } else {
                    $result = unlink("$dir/$file");
                }
            }
        }
        closedir($handle);
        if ($result){
            $result = rmdir($dir);
        }
    }
    return $result;
}
