<?php 
 ob_start();
    require_once '../../config.php'; 
    require_once BLA.'inc/header.php';
    require_once BL.'functions/validate.php';
    //require_once BL.'functions/messages.php';
   
?>

<?php 
if(isset($_GET['id']) && is_numeric($_GET['id']))
{
    $row = getRow('cities','city_id',$_GET['id']);
    if($row)
    {
        $city_id = $row['city_id'];
    }else{
        header("location:".BURLA.'cities/');
    }

}
else
{
    header("location:".BURLA.'cities/');
}

?>



    <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Edit City</h3>
        <form method="post" action="<?php echo BURLA.'cities/update.php'; ?>" >
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" value="<?php echo $row['city_name']; ?>" class="form-control" required>
                <input type="hidden" name="city_id" value="<?php echo $row['city_id']; ?>" class="form-control" >
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Edit</button>
        </form>
    </div>


<?php 
require_once BLA.'inc/footer.php';

?>