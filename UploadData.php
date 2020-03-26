<?php
 
//check if something its being sent to this script
if ($_POST)
{
    //check if theres a field called action in the sent data
    if ( isset ($_POST['Data']) )
    {
            //check if the field file which contains the binary data of the actual file uploaded successfully with no errors, the UPLOAD_ERR_OK means no error and upload was successful       
            if ($_FILES['Data']['error'] === UPLOAD_ERR_OK)
            {
                //check if the file has a name, in this script it has to have a name to be stored, the file name is sent by unity
                if ($_FILES['Data']['name'] !== "")
                {
                        //construct the final file name path, it depends on how your web hosting has things configured, if its x10 free hosting, just change username to your x10 hosting username
                        //also you can change the levels folder to the name of the folder where you want to upload your files, the folder has to exist prior to using this script, or a error will occur
                        // try using __FILE__ constant to find out what is the full path to this file,google more about it if you are not sure whats that about
                        $uploadfile =  '' . $_FILES['Data']['name'];
                       
                        //once all safety checks are done, you can safely move the file from the temporary location to a public accessible location
                        move_uploaded_file($_FILES['Data']['tmp_name'], $uploadfile);              
                 }//if
   
        }//if
       
    }//if  
   
}//if
?>