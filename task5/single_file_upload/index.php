<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    // setting upload errors
    $errors=array();
    $image=$_FILES['my_work'];
    // echo "<pre>";
    // print_r($image);
    // echo "</pre>";
    $image_name=rand(1,99999) . $image['name'];
    $image_path=$image['full_path'];
    $image_type=$image['type'];
    $image_error=$image['error'];
    $image_size=$image['size'];
    $image_tmp=$image['tmp_name'];
   

    // upload checks

    //set allowed extention
    $allowed_ext=['png','jpg','gif','jpeg'];

    // get file extention
    $image_ext=explode('.',$image_name);
    $image_ext_end=strtolower(end($image_ext));




    
    //check if files uploaded
    if($image_error == 4):
        $errors[]='<div>there is no file uploaded </div>';
    else:
        //check file size
        if($image_size > 1027175)
        {
            $errors[]='<div> File Cannot Be Uploaded </div>';
        }
        //check allowed extetion
        if(! in_array($image_ext_end,$allowed_ext)):
            $errors[]='<div> File is not valid </div>';

        endif;



    endif;

    //check if no errors
    if(empty($errors))
    {
        move_uploaded_file($image_tmp,'C:\xampp\htdocs\course_php\file_upload\files\\'.$image_name);
        echo "Image Uploaded";
    }else{
        foreach($errors as $err)
        {
            echo $err;
        }
    }

    
}



?>




<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="my_work" value="">
    <input type="submit" value="upload">
</form>