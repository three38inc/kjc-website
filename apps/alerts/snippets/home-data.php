<div class="panel panel-default m-t-20">
    <div class="panel-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mails m-0">
                <tbody>
                    <?php
                        /*Get the available alerts*/
                        $stmt = $connector->query('SELECT * FROM `alerter`');
                        if($stmt){
                            while($row = $stmt->fetch()){
                            ?>
                            <tr class="unread">
                                <td class="mail-select" style="width:20%;">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1"></label>
                                    </div>
                            <?php
                                if($row['star']==1){
                            ?>
                                    <i class="fa fa-star m-r-15 text-warning"></i>
                            <?php
                                }else{
                            ?>
                                    <i class="fa fa-star m-r-15 text-muted"></i>
                            <?php
                                }
                            ?>
                                    <i class="fa fa-circle m-l-5" style="color:
                                    <?php 
                                        $tag_info = $connector->prepare('SELECT * FROM `tags` WHERE `id` = :id');
                                        $tag_info->bindValue(":id",$row['tag_id'],PDO::PARAM_INT);
                                        $tag_info->execute();
                                        if($tag_row = $tag_info->fetch(PDO::FETCH_ASSOC)){
                                            echo $tag_row["color"];
                                        }
                                        else{
                                            echo "#b2b2b2";
                                        }
                                        $tag_info=null;
                                        $tag_row=null;
                                    ?>">
                                    </i>
                                </td>
                                <td class="hidden-lg hidden-md">
                                    <?php echo trim($row['message']);?>
                                </td>
                                <td class="hidden-xs hidden-sm" style="width:60%;">
                                    <?php echo trim($row['message']);?>
                                </td>
                                <td class="text-right">

                                <?php
                                
                                    
                                    $now_time = strtotime((date_timezone_set(new DateTime(),timezone_open('Asia/Calcutta')))->format('Y-m-d H:i:s'));
                                    $from_time = strtotime($row['date_created']);
                                    if(round(abs($now_time - $from_time) / 60,2)<1440){
                                      echo "Today";
                                    }else if(round(abs($now_time - $from_time) / 60,2)<2880){
                                      echo "Yesterday";
                                    }
                                    else{
                                    $day=$row['date_created']; 
                                      echo (new DateTime($day))->format('m/d/Y');
                                    }
                                ?>

                               </td>
                            </tr>
                            <?php
                            }
                                
                        }
                    ?>
<!--
                    <tr class="unread">
                        <td class="mail-select">
                            <div class="checkbox checkbox-primary m-r-15">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1"></label>
                            </div>

                            <i class="fa fa-star m-r-15 text-warning"></i>

                            <i class="fa fa-circle m-l-5 text-warning"></i>
                        </td>

                        <td class="hidden-xs">
                            <a href="compose-alert.php?alert-no=1" class="email-msg">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                        </td>

                        <td class="text-right">
                            07:23 AM
                        </td>
                    </tr>
-->
                </tbody>
            </table>
        </div>

    </div>
    <!-- panel body -->
</div>
<!-- panel -->

