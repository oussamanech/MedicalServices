<?php 
 ob_start();
    require_once '../../config.php'; 
    require_once BLA.'inc/header.php';
    require_once BL.'functions/validate.php';
    
    ?>  
<?php 
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $city_id = $_POST['city_id'];
    $row = getRow('cities','city_id',$city_id);
    if($row)
    {
        
        $sql="UPDATE `cities` SET `city_name` = '$name' WHERE `cities`.`city_id` =$city_id ;";
        $success_message = db_update($sql);
        require_once BL.'functions/messages.php';
        header("refresh:1;url=".BURLA."cities");
    }else{
        $error_message = "Please Type Correct City";
        require_once BL.'functions/messages.php';
        header("location:".BURLA.'cities/');
    }
}
?>

<?php 
require_once BLA.'inc/footer.php';

?>