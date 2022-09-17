<?php 
$id=$_REQUEST['x'];
if($id!=3456){
include('config.php');
$query ="SELECT * FROM `songs` where `category`='$id'";
$result=mysqli_query($conn,$query);
    while($data=mysqli_fetch_array($result)){
        ?>
        <div class="col-md-3 artist-grid">
            <a  href="song_category.php?id=<?php echo $data['id']?>"><img src="category/<?php echo $data['thumbnail']?>" title="allbum-name"></a>
                <a href="song_category.php?id=<?php echo $data['id']?>"><i class="glyphicon glyphicon-play-circle"></i></a>
            <a class="art" href="song_category.php?id=<?php echo $data['id']?>"><?php ?></a>
        </div>
               				
        <div class="cleafix"></div>
        <?php
            }
        }else{
                $sno = 1; 
                include("config.php");
                    $query = "SELECT * from `songs`";
                $result = mysqli_query($conn,$query);
                while($data = mysqli_fetch_array($result))
                {
                ?>
                    <div class="col-md-3 artist-grid">
                        <a  href="song_categoryphp?id=<?php echo $data['id']?>"><img src="category/<?php echo $data['thumbnail']?>" title="allbum-name"></a>
                            <a href="song_categoryphp?id=<?php echo $data['id']?>"><i class="glyphicon glyphicon-play-circle"></i></a>
                        <a class="art" href="song_categoryphp?id=<?php echo $data['id']?>"><?php ?></a>
                    </div>
                <?php
            }}
            ?>
</div>	
</div>
    




