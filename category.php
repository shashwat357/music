
<?php
include('header2.php');
?>
<style>
    .borderbox{
	box-shadow: 5px 5px 10px seagreen;
	margin-top:100px;
    margin-left:200px;
	padding:20px;
}
</style>
<div class="container borderbox" >
    <div class="row my-5 box-3">
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <strong><h1>Add Category</h1></strong>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <?php
            if(isset($_REQUEST["msg"]))
            {
                echo $_REQUEST["msg"];
            }
            ?>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-2"></div>
        <div class="col-md-8 ">
            <form method="post" class="my-5" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>Category name</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="text"  name="category_name"  placeholder=" " required="">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>Thumbnail</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="file"  name="thumbnail"  placeholder=" " required="">
                    </div>
                </div>
                <center><button type="submit" class="btn btn-primary" name="submit">Submit</button></center>
            </form>
        </div>   
    </div>
</div>
        </div>   
        </div>          
<?php
include('footer1.php');
?>

<?php
if(isset($_REQUEST["submit"]))
{
    $category_name = $_REQUEST["category_name"];
    
    $file_name = $_FILES["thumbnail"]["name"];
    $file_tmp_path = $_FILES["thumbnail"]["tmp_name"];
    $file_type = $_FILES["thumbnail"]["type"];
    $file_sizes = $_FILES["thumbnail"]["size"];

    $new_name = rand().$file_name;
    
    //connect with database
    include("config.php");

    //insert query
    $query = "INSERT INTO `category`(`category_name`, `thumbnail`, `status`) VALUES ('$category_name','$new_name','Active')";

    //Execute 
    $result = mysqli_query($conn,$query);

    if($result>0)
    {
        move_uploaded_file($file_tmp_path,'category/'.$new_name);
        echo "<script>window.location.assign('category.php?msg=Record Inserted')</script>";
    }
    else{
        echo mysqli_error($conn);
        echo "<script>window.location.assign('category.php?msg=Try again')</script>";
    }
}
?>
