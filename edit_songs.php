<?php
include_once("header2.php");
?>
<?php
if(isset($_REQUEST['id'])){
$id = $_REQUEST["id"];
include("config.php");
 $q ="SELECT songs.*, category.category_name, artists.artist_name FROM `songs` INNER JOIN `category` on songs.category=category.id INNER JOIN `artists` on artists.id=songs.artist where songs.id  ='$id'";
$res = mysqli_query($conn,$q);
$d = mysqli_fetch_array($res);
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
           <strong><h1>Edit Songs</h1></strong>
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
           <form  method="post"  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Choose Category</label>
                    <select name="category_name" required class="form-control">
                        <option value="" selected disabled>Select Category</option>
                        <?php
                        include("config.php");
                        $query = "SELECT * FROM `category`";
                        $result = mysqli_query($conn,$query);
                        while($data = mysqli_fetch_array($result))
                        {
                            ?>
                                <option value='<?php echo $data['id'] ?>' <?php if($d['category']=$data['id']){?>
                                selected <?php } ?> > <?php echo $data['category_name']?></option>"
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Choose Artist</label>
                   
                    <select name="artist" required class="form-control">
                        <option value="" selected disabled>Select Artist</option>
                        <?php
                        include("config.php");
                        $query = "SELECT * FROM `artists`";
                        $result = mysqli_query($conn,$query);
                        while($data = mysqli_fetch_array($result))
                        {
                            ?>
                             <option value='<?php echo $data['id'] ?>' <?php if($d['artist']=$data['id']){?>
                                selected <?php } ?> > <?php echo $data['artist_name']?></option>"
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Song Title</label>
                    <input type="text" class="form-control" name="song_title" value="<?php echo $d['song_title']?>" required>
                </div>
                <div class="form-group">
                    <label for="">Thumbnail</label>
                    <input type="file" class="form-control" name="thumbnail" >
                    <input type="hidden" class="form-control" name="hiddenimg" value="<?php echo $d['thumbnail']?>">
                    <input type="hidden"  class="form-control" name="id" value="<?php echo $d['id']?>">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <select name="mode" id="mode" onchange="hit()" class="form-control" >
                    <?php
                        if($d['mode']=='Online'){
                        ?>
                       <option selected>Online</option>
                       <option>Offline</option>
                       <?php
                       }elseif ($d['mode']=='Offline'){
                        ?>
                        <option >Online</option>
                       <option selected>Offline</option>
                       <?php
                       }else{
                        ?>
                         <option value="" selected disabled>Mode</option>
                         <option >Online</option>
                       <option >Offline</option>
                        <?php
                       }
                       ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Song link</label>
                    <input type="text" id="link" class="form-control" value="<?php echo $d['song_link']?>" name="song_link">
                </div>
                <div class="form-group">
                    <label for="">Upload Song</label>
                    <input type="file" id="upload" class="form-control" name="addsong">
                    <input type="hidden" class="form-control" name="addsong1" value="<?php echo $d['upload_song']?>">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea  class="form-control" name="description" required><?php echo $d['description']?></textarea>
                </div>
                <button type="submit" class="btn btn-primary my-2" name="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</div>
<?php
include_once("footer1.php");
?>
<script>
    var mode=document.getElementById('mode').value;
        //console.log(mode);
        if(mode=='Online'){
            //console.log('hi');
            document.getElementById('link').disabled=false;
            document.getElementById('upload').disabled=true;
        }
        else{
            //console.log('hfghji');
            document.getElementById('upload').disabled=false;
            document.getElementById('link').disabled=true;
        }
    function hit(){
        var mode=document.getElementById('mode').value;
        //alert(mode);
        if(mode=='Online'){
            document.getElementById('link').disabled=false;
            document.getElementById('upload').disabled=true;
        }
        else{
            document.getElementById('upload').disabled=false;
            document.getElementById('link').disabled=true;
        }
    }
   
</script>
