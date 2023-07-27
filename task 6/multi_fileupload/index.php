<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    // setting upload errors
    $errors=array();
    $image=$_FILES['my_work'];
    
    $image_name=$image['name'];
    $image_path=$image['full_path'];
    $image_type=$image['type'];
    $image_error=$image['error'];
    $image_size=$image['size'];
    $image_tmp=$image['tmp_name'];
   
    $file_count=count($image_name);

    //set allowed extention
    $allowed_ext=['word','jpg','pdf'];


    if($image_error[0] == 4)
    {
        echo '<div>there is no file uploaded </div>';
    }
        
    else
    {
        for($i=0;$i<$file_count;$i++)
    {
        //setting array errors
        $errors=array();

            // get file extention
        $image_ext[$i]=explode('.',$image_name[$i]);
        $image_ext_end[$i]=strtolower(end($image_ext[$i]));

        //Get random nmae for files
        $image_random[$i]= uniqid().'.'.$image_ext_end[$i];

        //check allowed extetion
        if(! in_array($image_ext_end[$i],$allowed_ext)):
            $errors[]='<div> File is not valid Extention </div>';

        endif;

        //check size 
        if($image_size[$i] > 8000000 ):
            $errors[]='<div> File Cannot Be more than 8 mega </div>';
        endif;

        // echo $image_name[$i]."<bre>";

        //check if no errors
        if(empty($errors))
        {
            move_uploaded_file($image_tmp[$i],$_SERVER['DOCUMENT_ROOT'].'\github-repo\Senior_group-51-php\task 6\multi_fileupload\files\\'.$image_random[$i]);

            echo "File Number ". ($i+1) .  " is Uploaded <br>";
        }else{
            echo "Error for File  Number". ($i+1);

            // loop errors
            foreach($errors as $err)
            {
                echo $err;
             }
    }



    }
}
    
    
    
    
    
    
    
    
    
    
   
    
  




















}



?>




<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="my_work[]" multiple="multi">
    <input type="submit" value="upload">
</form>



