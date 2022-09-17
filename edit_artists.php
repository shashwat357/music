<?php
include_once("header2.php");
$id = $_REQUEST["id"];
include("config.php");
$q = "select * from `artists` where `id`='$id'";
$res = mysqli_query($conn,$q);
if($d = mysqli_fetch_array($res)){
    $c_name = $d['artist_name'];
    $c_image = $d['thumbnail'];
}
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
           <strong><h1>Edit Artists</h1></strong>
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
            <form method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="form-group">
                    <label for="">Artist Name</label>
                    <input type="text" class="form-control" name="artist_name" value="<?php echo $c_name; ?>">
                </div>
                <div class="form-group">
                    <label for="">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail">

                    <!-- only for file uploading start -->
                    <input type="hidden" name="hidden_image" value="<?php echo $c_image; ?>">
                    <!-- only for file uploading End -->

                </div>
                <button type="submit" class="btn btn-success my-2" name="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</div>
<?php
include_once("footer1.php");
?>

