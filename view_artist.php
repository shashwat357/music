<?php
include('header1.php');
?>
<div class="container">
    <div class="albums row">
        <div class="tittle-head">
            <h3 class="tittle">Songs <span class="new">New</span></h3>
            <div class="clearfix"> </div>
        </div>
        <?php     
            
            include('config.php');
            $query="SELECT * from `artists`";
            $res=mysqli_query($conn,$query);
            while($d = mysqli_fetch_array($res))
        {
        ?>
        <div class="col-md-4 content-grid">
            <a class="play-icon popup-with-zoom-anim" href="song_artist.php?id=<?php echo $d['id']?>"><img src="category/<?php echo $d['thumbnail']?>" title="<?php echo $d['artist_name']?>"></a>
            <h2><?php echo $d['artist_name']?></h2>
            <a class="button play-icon popup-with-zoom-anim" href="song_artist.php?id=<?php echo $d['id']?>">Listen now</a>
        </div>
        <?php 
        }
        ?>
        <div class="clearfix"> </div>
    </div>
</div>					
<?php
include('footer1.php');
?>
    

