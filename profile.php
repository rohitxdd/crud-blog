<?php
include("./components/header.php");
include("./phpscripts/connection.php");
?>
<div class="container">
    <div class="blog-body">
        
        <?php
        $selectQuery = "SELECT *
        FROM \"blogData\" WHERE author = '".$_SESSION['user']."'  ORDER BY time DESC";
        $result = pg_query($selectQuery);
        if(!$result){
            echo "<h1>No Blog to Show...</h1>";
        }
        while($row = pg_fetch_assoc($result)){
        ?>
        <div class="blog">
            <div class="title">
                <h1># <?php echo$row["title"]?></h1>
            </div>
            <div class="content">
                <p> <?php echo $row["content"] ?></p>
            </div>
            <div class="footer">
                <p><i class="fa-solid fa-user"></i><?php echo $row["author"] ?></p>
                <p> <?php echo $row["time"] ?></p>
            </div>
        </div>
                
        <?php
        }
        ?>
    </div>
</div>
<?php
include("./components/footer.php")
?>