
    <h3 class="panel-title m-t-40">Tags</h3>

    <div class="list-group b-0 mail-list">
    <?php 
    /* Get the Tags stored */
    $stmt = $connector->query('SELECT * FROM `tags`');
    if($stmt){
        while($row=$stmt->fetch()){
            echo '<a href="#" class="list-group-item b-0"><span class="fa fa-circle m-r-10" style="color:'.$row["color"].'"></span>'.$row["name"].'</a>';
        }
    }
    else{
    ?>
        <a href="#" class="list-group-item b-0"><span class="fa fa-circle m-r-10" style="color:#b2b2b2"></span>None</a>
    <?php
    }
    ?>
    </div>
