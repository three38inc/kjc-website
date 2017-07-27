<div class="panel panel-default m-t-20">
    <div class="panel-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mails m-0">
                <tbody>
                    <?php
                        /*Get the available alerts*/
                        if(isset($_GET['label-selection']) && !empty($_GET['label-selection'])){
                            $stmt = $connector->prepare('SELECT * FROM `alerter` WHERE `tag_id`=:tag_id');
                            $stmt->bindValue(":tag_id",$_GET['label-selection'],PDO::PARAM_INT);
                        }
                        else if(isset($_GET['status-selection']) && !empty($_GET['status-selection'])){
                            $stmt = $connector->prepare('SELECT * FROM `alerter` WHERE `star`=:star');
                            $stmt->bindValue(":star",$_GET['status-selection'],PDO::PARAM_INT);
                        }
                        else{
                            $stmt = $connector->prepare('SELECT * FROM `alerter`');
                        }
                        $stmt->execute();
                        if($stmt->rowCount()>=1){
                            while($row = $stmt->fetch()){
                            ?>
                            <tr class="unread">
                                <td class="mail-select" style="width:20%;">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input class="checkbox" type="checkbox" data-id="<?php echo $row['id'];?>">
                                        <label for="checkbox"></label>
                                    </div>
                            <?php

                                $now=strtotime((date_timezone_set(new DateTime(),timezone_open('Asia/Calcutta')))->format('Y-m-d H:i:s a'));
                                
                                $alertDateBegin = strtotime(explode("<to>",$row['visibility_period'])[0]);
                                $alertDateEnd = strtotime(explode("<to>",$row['visibility_period'])[1]);

                                if($now > $alertDateBegin && $now < $alertDateEnd) {
                                    $star=1;
                                } else if($now < $alertDateBegin && $now < $alertDateEnd){
                                    $star=0;  
                                }
                                else if($now > $alertDateBegin && $now > $alertDateEnd){
                                    $star=2;  
                                }
                                $sql = "UPDATE `alerter` SET `star` = ? WHERE `id` = ?";
                                $connector->prepare($sql)->execute([$star, $row['id']]);
                                if($star==1){
                            ?>
                                    <i class="fa fa-star m-r-15 text-success"></i>
                            <?php
                                }else if($star==2){
                            ?>
                                    <i class="fa fa-star m-r-15 text-muted"></i>
                            <?php
                                }else if($star==0){
                            ?>
                                <i class="fa fa-star m-r-15 text-warning"></i>
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
                        else{
                        ?>
                            <tr class="unread">
                                <td style="text-align:center;"> No data Available ....!</td>
                            </tr>
                        <?php
                        }
                    ?>

                </tbody>
                
            </table>
        </div>
        
    </div>
    <!-- panel body -->
</div>
<!-- panel -->

