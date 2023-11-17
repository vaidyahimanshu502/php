<!-- PHP File System allows us to create file, read file line by line,
     read file character by character, write file, append file, delete file
     and close file. -->

     <!-- Reading files  -->
<?php
// var_dump(__FILE__);
    $filePath = "file.txt";
    if (file_exists($filePath)) {
        $handler = fopen($filePath, "r");
        $content = fread($handler, filesize($filePath));
        echo $content;
        fclose($handler);
    } else {
        echo "File not found.";
    }
?>

     <!-- Writings into files -->

<?php
   $filepath = "file.txt";
   $fp = fopen($filePath, "w");
   fwrite($fp, "My name is himanshu vaidya");
   fwrite($fp, "My name is sudhanshu vaidya");
   fwrite($fp, "My name is priyanshu vaidya");
   fwrite($fp, "My name is ritanshu vaidya");
   fwrite($fp, "My name is salini vaidya");

?>

      <!-- delete files  -->

<?php
    unlink('file.txt');
    echo "file deleted successfuly!";
?>
