<?php 
include("dbcon.php");
$req=$_REQUEST['req'];
switch($req){
	case(1):
		if(isset($_FILES['filefield'])){
			$file=$_FILES['filefield'];
			$upload_directory='uploads/';
			$ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";
			$allowed_extensions=explode(',',$ext_str);
			$max_file_size = 10485760;//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */
			$ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character
			if (!in_array($ext, $allowed_extensions) ) {
				echo "Only <strong>".$ext_str."</strong> files allowed to upload"; // exit the script by warning
			} /* check file size of the file if it exceeds the specified size warn user */
		
			if($file['size']>=$max_file_size){
				echo "only the file less than ".$max_file_size."mb  allowed to upload"; // exit the script by warning
			}
			
			$path=md5(microtime()).'.'.$ext;
			echo $path;
			
			if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){
				$document=array("title"=>"$_REQUEST[pname]","Price"=>"$_REQUEST[pprice]","category"=>"$_REQUEST[pcategory]","pimage"=>"$path");
				$collection->insert($document);
				if($collection){
					echo("Data Added");
				}
			}
			
			else{
				echo "The file cant moved to target directory."; //file can't moved with unknown reasons likr cleaning of server temperory files cleaning
			}
		}; 
		
		
}
?>