<div id="label-delete-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Create Labels</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <?php 
                            /* Get the Tags stored */
                            $stmt = $connector->query('SELECT * FROM `tags`');
                            if($stmt->rowCount()>=1){
                                while($row=$stmt->fetch()){
                                    echo '<span class="tag label label-info m-r-10" style="background-color:#797979" data-tag-id="'.$row['id'].'">'.$row['name'].' <span style="background-color:'.$row['color'].'">&nbsp;&nbsp;</span> <i class="fa fa-remove tag-remove" style="color: #000;cursor:pointer;"></i></span>';
                                }
                            }
                            else{
                        ?>
                        <span class="tag label label-info">No Tags Available ! Create One to Delete <span style="background-color:#f00">&nbsp;&nbsp;</span> <i class="fa fa-remove" style="color: #000;"></i></span>
                        <?php
                            }
                        ?>
                            
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
