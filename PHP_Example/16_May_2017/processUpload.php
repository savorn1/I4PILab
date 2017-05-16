<?php
    $uploadDir = "upload/";
    $fileName = $_FILES['attachment']['name'];
    $fileTmpName = $_FILES['attachment']['tmp_name'];
    $target = $uploadDir.$fileName;
    $fileSize = filesize($fileTmpName);
    //if file is bigger than 5M, reject the file
    if($fileSize <= 5242880){
        $fileExtension = pathinfo($_FILES['attachment']['name'])['extension'];
        if(in_array($fileExtension, ['pdf', 'jpg', 'png'])){
            if(move_uploaded_file($fileTmpName, $target)){
                echo "File is uploaded successfully!";
            }else{
                echo "File is fail to upload!";
            }
        }else{
            echo "Only pdf/jpg/png are allowed";
        }
    }else{
        echo "File is bigger thant 5M - file size is ".number_format($fileSize/1024/1024, 2)."MB";
    }



