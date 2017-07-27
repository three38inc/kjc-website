<div class="row">
    <div class="col-lg-12">
        <div class="btn-toolbar m-t-20" role="toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-primary waves-effect waves-light btn-mail-delete"><i class="fa fa-trash-o"></i>  Delete</button>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-primary waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-tag"></i>
                                        <b class="caret"></b>
                                         Label</button>
                <ul class="dropdown-menu" role="menu">
                    <?php 
                    /* Get the Tags stored */
                        $stmt = $connector->query('SELECT * FROM `tags`');
                        if($stmt){
                            while($row=$stmt->fetch()){
                                echo '<li><a href="index.php?label-selection='.$row['id'].'" class="list-group-item b-0"><span class="fa fa-circle m-r-10" style="color:'.$row["color"].'"></span>'.$row["name"].'</a></li>';
                            }
                        }
                    ?>
                    <li><a href="index.php" class="list-group-item b-0"><span class="fa fa-circle m-r-10" style="color:#b2b2b2"></span>All</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-primary waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class=" fa fa-tripadvisor"></i>
                                        <b class="caret"></b>
                                         Status</button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?status-selection=1" class="list-group-item b-0"><i class="fa fa-star text-success"></i> On Going</a></li>
                    <li><a href="index.php?status-selection=0" class="list-group-item b-0"><i class="fa fa-star text-warning"></i> Yet to be Active</a></li>
                    <li><a href="index.php?status-selection=2" class="list-group-item b-0"><i class="fa fa-star text-muted"></i> Expired</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End row -->
