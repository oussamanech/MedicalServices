<?php 
    require_once '../../config.php'; 
    require_once BLA.'inc/header.php';
    require_once BL.'functions/validate.php';
    //require_once BL.'functions/messages.php';
?>

<?php 

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $notEmpty = checkEmpty($name);
    // name > 3 char
    $less = checkLess($name,3);
    if($notEmpty && $less)
    { 
            $sql = "INSERT INTO cities (`city_name`) VALUES ('$name') ";
            $success_message = db_insert($sql);
    }
    else 
    {
        $error_message = "Please Type Correct City";
    }

    require BL.'functions/messages.php';
}


?>

<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New City</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name Of City" required>
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>

<?php 

require_once BLA.'inc/footer.php';

?>