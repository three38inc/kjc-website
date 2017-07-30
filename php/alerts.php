<div class="newsAlert">
<!--	<marquee onmouseover="stop();"  onmouseout="start();"> ‘SHUBH AARAMBH’ – Inaugural Session for One year PG Diploma Program for Working Executives is scheduled at 10.00 am on 29th July 2017. | Inauguration of Academic Year - commencement of I sem Law programmes on 31<sup>st</sup>, July 2017. | II sem BA / B.SC / B.COM / BBA / BCA Supplementry results are announced. Students can check results on ERP Solutions. Last date to apply for revaluation is 02<sup>nd</sup> August, 2017. | UG Revaluation Results published online on 22-7-17. Students can view the same through the ERP solution (TCS ion). </marquee>-->
    <marquee onmouseover="stop();"  onmouseout="start();">
        <?php
        require('../apps/alerts/snippets/connect.php');
        $stmt = $connector->prepare('SELECT * FROM `alerter`');
        $stmt->execute();
        if($stmt->rowCount()>=1){
            while($row = $stmt->fetch()){
                $now=strtotime((date_timezone_set(new DateTime(),timezone_open('Asia/Calcutta')))->format('Y-m-d h:i:s a'));
                $alertDateBegin = strtotime(explode("<to>",$row['visibility_period'])[0]);
                $alertDateEnd = strtotime(explode("<to>",$row['visibility_period'])[1]);
                $star=0;
                if($now > $alertDateBegin && $now < $alertDateEnd) {
                    echo $row['message']." | ";
                    $star=1;
                } else if($now < $alertDateBegin && $now < $alertDateEnd){
                    $star=0;  
                }
                else if($now > $alertDateBegin && $now > $alertDateEnd){
                    $star=2;  
                }
                $sql = "UPDATE `alerter` SET `star` = ? WHERE `id` = ?";
                $connector->prepare($sql)->execute([$star, $row['id']]);
                
            }
        }
        
    ?> </marquee>
    <div class='hide-btn'>
        <i class="fa fa-angle-double-left"></i>
    </div>
</div>
