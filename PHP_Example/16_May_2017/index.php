<html>
    <head>
        <title>PHP File</title>
    </head>
    <body>
        <?php
//            ini_set('display_startup_errors', 1);
//            ini_set('display_errors', 1);
//            error_reporting(-1);

            $fileName = "pptx1.pptx";
            $file = fopen($fileName, 'r') or die("Fail to open file");
            //Read the hold file
//            $fileSize = filesize($fileName);
//            echo $fileSize;
//            echo fread($file, $fileSize);

            //echo mime_content_type($fileName);
            echo pathinfo($fileName)['extension']."<br/>";
            echo pathinfo($fileName)['filename'];
            //read line by line
//            while(!feof($file)){
//                echo fgets($file)."<br/>";
//            }
            //Write content to file
//            for($i=0; $i<1000; $i++){
//                $string = "Hello I4 GIC, this is your first example in php\n";
//                fwrite($file, $string);
//            }
            fclose($file);
        ?>
    </body>
</html>