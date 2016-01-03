<?php
require_once("init.php");
    
	$errors = array();
    function confirm_query($result_set)
	{
        if(!$result_set){
            die("database query failed.");
        }
    }


     
    function fieldname_as_text($fieldname)
	{
        $fieldname = str_replace("_", " ", $fieldname);
        $fieldname = ucfirst($fieldname);
        return $fieldname; 
    }
    
    function from_errors($errors = array())
	{
        $output = "";
        if(!empty($errors)){
            $output .= "<div class=\"error\">";
            $output .= "please fix the following errors:";
            $output .= "<ul>";
            foreach ($errors as $key => $error){
                $output .= "<li>{$error}</li>";
            }
            $output .= "</ul><br />";
            $output .= "</div>";
        }
        return $output; 
    }
    
?>
