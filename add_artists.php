
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
           <strong><h1>Add Artist</h1></strong>
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
            <form method="post" action="add.php" class="my-5" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col-md-2">
                        <label>Artist name</label>
                    </div>
                    <div class="col-md-8">
                        <input class="form-control" type="text"  name="artist_name"  placeholder=" " required="">
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

