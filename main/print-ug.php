<?php

session_start();
function format_marks($mark, $show)
{
    if($show){
        $dig = preg_match_all( "/[0-9]/", $mark );
        if($dig==2)
            return "&nbsp;".$mark;
        else
            return $mark;
    }
    else
        return '&nbsp;-';
}

if(isset($_REQUEST['H'])){
    $height = $_REQUEST['H'];
}
else
{
    $height = 80;
}


if(isset($_SESSION['login']))
{   

    // output headers so that the file is downloaded rather than displayed
    header('Content-Type: text/HTML; charset=utf-8');
    //    header('Content-Disposition: attachment; filename=remarks_master_'.date("Y-m-d_H-i-s").'.csv');

    // create a file pointer connected to the output stream
    //    $output = fopen('php://output', 'w');

    // output the column headings
    //    fputcsv($output, array('STUDENTREGNO','REMARKNO','COMMENTS'));


    // fetch the data
    require('connect.php');
    $gpa_master = "";
    $master = "";
    $regno = "";
    $batch = "";
    $output = "<html><head><link href='https://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'></head><body>";
    $date = $_REQUEST['date'];
    if(isset($_REQUEST['regno']))
    {
        //echo "no regno";
        if(empty($_REQUEST['regno']))
            $regno = "%";
        else
            $regno = $_REQUEST['regno'];
    }

    if(isset($_REQUEST['batch']))
    {
        if(empty($_REQUEST['batch']))
            $batch = "%";
        else
            $batch = $_REQUEST['batch'];
    }


    //    $regno = "%";
    //    $batch = "%";


    $Eres = mysqli_query($connect,"SELECT * FROM exam_type") or die(mysqli_error($connect));
    $Erows = array();
    $Elen = mysqli_num_rows($Eres);

    while($Erow = mysqli_fetch_array($Eres)){
        array_push($Erows,$Erow);
    }

    //for($Ei=0;$Ei<$Elen; $Ei++)
    //    print($Erows[$Ei]['EID']);
    //print_r($Erows);
    //die();



    if (strpos($regno,',') !== false) {
        $ar = explode(",",$regno);
        $q = "";
        //        print_r($ar);
        //        echo sizeof($ar);
        for($k=0;$k<sizeof($ar);$k++)
        {
            if($k+1 == sizeof($ar))
                $q .= "`STUDENTREGNO` = '".$ar[$k]."'";
            else
                $q .= "`STUDENTREGNO` = '".$ar[$k]."' or ";
        }
        //        echo "SELECT DISTINCT(`STUDENTREGNO`) STUDENTREGNO FROM results where $q";
        $result = mysqli_query($connect,"SELECT DISTINCT(`STUDENTREGNO`) STUDENTREGNO FROM results where $q") or die(mysqli_error($connect));
        //        echo mysqli_num_rows($result);
    }
    else{
        $result = mysqli_query($connect,"SELECT DISTINCT(`STUDENTREGNO`) STUDENTREGNO FROM results where `STUDENTREGNO` like '$regno' and `STUDENTBATCH` like '$batch'") or die(mysqli_error($connect));
        //    echo mysqli_num_rows($result);

    }

    $bottom = 0;$px="px";
    $cntr=0;
    while($row = mysqli_fetch_array($result))
    {

        $final_credits =0;
        $final_obt_marks =0;
        $final_max_marks =0;
        $sumGPxCredits = 0;
        $cntr++;
        //if($cntr%2==0){ $bottom = 50;$bottom +=4; } else { $bottom +=8; }

        $output .=" <table border='0' width='730px' height='1012px' cellspacing='0' cellpadding='0' align='left' style='font-size:11px; font-family:sans-serif; border-spacing:0px; position:relative; margin-top:10px; margin-left: 30px;margin-bottom:$bottom$px; table-layout: fixed; display:block; '>
            <tr height='".$height."px'><!-- 90px height issue-->
                <td colspan='2'>&nbsp;</td>
            </tr>";

        $res = mysqli_query($connect,"SELECT * FROM results where `STUDENTREGNO` = '".$row['STUDENTREGNO']."'") or die(mysqli_error($connect));
        $r = mysqli_fetch_array($res);

        $years_of_study = "";
        $startyr = substr($r['STUDENTBATCH'],0,4);

        $a = mysqli_query($connect,"SELECT * FROM prog_master where `ABBRV` = '".$r['STUDENTBATCH']."'") or die(mysqli_error($connect));
        $b = mysqli_fetch_array($a);

        $endyr = $startyr + $b['YEARS'];
        $years_of_study = $startyr." - ".$endyr;

        if($startyr == "2013")
            $imgNo = $r['STUDENTROLLNO'];
        else
            $imgNo = $r['STUDENTREGNO'];

        $standard = $b['STANDARD'];
        if (strpos($b['STANDARD'],'^') !== false) {
            $standard = str_replace("^","&nbsp;&nbsp;",$b['STANDARD']);
        }
        else{
            $standard = $b['STANDARD'];
        }

        $output .="
        <tr height='19px'>
                <td valign='bottom'  style='line-height:12px;padding-left:100px;'><strong>".$r['STUDENTNAME']."</strong></td>
                <td rowspan='4' align='right'><img style='max-height:91px; max-width:70px; margin-right:35px; margin-top:-70px;' src='../images/student/$imgNo.jpg' /></td>
            </tr>        
            <tr height='19px'>
                <td  colspan='' valign='bottom' style='line-height:12px;padding-left:100px;'><strong>".$r['STUDENTREGNO']."</strong></td>
            </tr> 
            <tr height='18px'>
                <td  colspan='' valign='bottom'  style='line-height:12px;padding-left:100px;position:absolute;margin-top:6px;'>".$standard."</td>
            </tr> 
            <tr height='18px'>
                <td  colspan='' valign='bottom'  style='line-height:12px;padding-left:100px;'>$years_of_study</td>
            </tr>";

        $output .="
            <tr height='90px'>
                <td  colspan='2'>&nbsp;</td>
            </tr> ";

        $output .="<tr height='600px'>";
        $test = $r['STUDENTBATCH']." - ".$r['STUDENTBATCH'][5];
        if($r['STUDENTBATCH'][5]=="B")
        {
            $gpa_master = "ug_gpa_master";
            $master = "ug_master";
        }
        else
        {
            $gpa_master = "pg_gpa_master";    
            $master = "pg_master";    
        }

        //find no of general remarks
        $res = mysqli_query($connect,"SELECT * FROM remarks where `STUDENTREGNO` = '".$row['STUDENTREGNO']."'") or die(mysqli_error($connect));
        $r = mysqli_fetch_array($res);
        $remarkSpace = mysqli_num_rows($res); //space for remarks

        $lineCount = 0;
        //$breakPoint = 40;
        // reduce that no from break point        
        $breakPoint = 49 - $remarkSpace;

        $res = mysqli_query($connect,"SELECT * FROM results where `STUDENTREGNO` = '".$row['STUDENTREGNO']."'") or die(mysqli_error($connect));
        $totRows = mysqli_num_rows($res);

        $output .="<td width='50%' valign='top'>
                    <table  height='600px' border='0' cellspacing='0' cellpadding='0' style='font-size:10px;font-family:sans-serif;border-spacing:0px;table-layout: fixed;' >";
        $output .="<tr height='10px'><td colspan='6' valign='top' style='height:5px;'>&nbsp;</td></tr>";//extra-line
        $lineCount++;

        $res = mysqli_query($connect,"SELECT DISTINCT(`ACADEMICSESSION`) FROM results where `STUDENTREGNO` = '".$row['STUDENTREGNO']."' ORDER BY `ACADEMICSESSION` ASC") or die(mysqli_error($connect));
        $totSem = mysqli_num_rows($res);
        $breakSession = 99;
        if($totRows <= $breakPoint)
        {
            $breakSession = ceil($totSem / 2);
        }
        $sessionCount = 0;
        $move = false;
        while($r = mysqli_fetch_array($res))
        {
            $result_1 = mysqli_query($connect,"SELECT * FROM results where `STUDENTREGNO` = '".$row['STUDENTREGNO']."' and `ACADEMICSESSION` = '".$r['ACADEMICSESSION']."' ORDER BY `COURSESORTORDER` ASC") or die(mysqli_error($connect));
            $neededRows = mysqli_num_rows($result_1)+1;

            $tot_credits = 0;
            $GP =0;
            if(($lineCount+$neededRows)>$breakPoint || $sessionCount==$breakSession)
            {
                for($j=1;$j<=($breakPoint-$lineCount);$j++)
                    $output .="<tr height='10px'><td colspan='6' valign='top'>&nbsp;</td></tr>";
                $lineCount = 0;
                $output .="</table> 
                </td>
                <td width='50%' valign='top'>
                    <table height='600px'  border='0' cellspacing='0' cellpadding='0' style='font-size:10px;font-family:sans-serif;border-spacing:0px;table-layout: fixed;margin-left:5px;' >";//-5px
                $output .="<tr height='10px'><td colspan='6' valign='top' style='height:5px;'>&nbsp;</td></tr>";//extra-line
                $lineCount++;
                $move = true;
            }
            $sessionCount ++;
            $lineCount++;
            $output .="<tr height='10px'><td colspan='6' valign='top'><strong>".$r['ACADEMICSESSION']."</strong></td></tr>";       
            for($Ei=0; $Ei<$Elen; $Ei++){
                //exam type code
                $result_2 = mysqli_query($connect,"SELECT * FROM results where `STUDENTREGNO` = '".$row['STUDENTREGNO']."' and `ACADEMICSESSION` = '".$r['ACADEMICSESSION']."' and `EXAM_TYPE` = '".$Erows[$Ei]['EID']."' ORDER BY `COURSESORTORDER` ASC") or die(mysqli_error($connect));
                //code ends
                if(mysqli_num_rows($result_2)){
                    $lineCount++;
                    $output .="<tr height='10px'><td colspan='6' valign='top'><strong>".$Erows[$Ei]['TITLE']."</strong></td></tr>";
                }

                while($row_1 = mysqli_fetch_array($result_2))
                {
                    $lineCount++;
                    if(strlen($row_1['SUBJECTNAME'])>40)//word length
                        $lineCount++;
                    if($move)
                    {
                        //second column

                        //if($row_1['SUBJECTCODE'] == "" && $row_1['EXAMDETAIL']!="AGG")
                        if($row_1['SUBJECTCODE'] == "")
                        {
                            //echo "hello";
                            /*$output .="<tr>
                                <td width='225px' valign='top'><strong>TOTAL</strong></td>
                                <td width='5px' valign='top'>&nbsp;</td>
                                <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'><strong>".format_marks($row_1['MAXIMUMMARKS'])."</strong></td>
                                <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'><strong>".format_marks($row_1['OBTAINEDMARKS'])."</strong></td>
                                <td width='37px' valign='top'>-</td>
                                <td width='35px' valign='top'><strong>".$tot_credits."</strong></td>
                                <td width='10px' valign='top'>&nbsp;</td>
                            </tr>";*/
                            //                            $output .="<tr><td colspan='6' valign='top'>&nbsp;</td></tr>"; $lineCount++;
                            //                            $final_credits += $tot_credits;
                            //                            $final_obt_marks += $row_1['OBTAINEDMARKS'];
                            //                            $final_max_marks += $row_1['MAXIMUMMARKS'];
                        }
                        else
                        {
                            $res_2 = mysqli_query($connect,"SELECT * FROM $gpa_master WHERE `GRADE` = '".$row_1['OBTAINEDGRADE']."'") or die(mysqli_error($connect));
                            $GP = 0;
                            $r_2 = mysqli_fetch_array($res_2);
                            $GP = $r_2['GRADEPOINT'];
                            //                        while($r_2 = mysqli_fetch_array($res_2))
                            //                        {
                            //                            
                            //                            if($row_1['OBTAINEDMARKS'] <= $r_2['UPPER'] && $row_1['OBTAINEDMARKS'] >= $r_2['LOWER'])
                            //                                $GP = $r_2['GRADEPOINT'];
                            //                            if($GP != 0)
                            //                            {
                            //                                break;
                            //                            }
                            //                        } 

                            if($row_1['SUBJECTCODE']=="MPS134BI1"||$row_1['SUBJECTCODE']=="MPS134AI1")
                            {
                                if($row_1['ISBACKLOG']=='Y'||$row_1['ISBACKLOG']=='y')
                                {
                                    $output .="<tr height='10px'>
                                        <td width='225px' valign='top'>".$row_1['SUBJECTNAME']."</td>
                                        <td width='5px' valign='top'>&nbsp;</td>
                                        <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>-</td>
                                        <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>-<sup>*</sup></td>
                                        <td width='37px' valign='top'>".$row_1['OBTAINEDGRADE']."</td>
                                        <td width='35px' valign='top'>".$row_1['CREDITS']."</td>
                                        <td width='0px' valign='top'>&nbsp;</td>
                                    </tr>"; 
                                }
                                else
                                {
                                    $output .="<tr height='10px'>
                                        <td width='225px' valign='top'>".$row_1['SUBJECTNAME']."</td>
                                        <td width='5px' valign='top'>&nbsp;</td>
                                        <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>-</td>
                                        <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>-</td>
                                        <td width='37px' valign='top'>".$row_1['OBTAINEDGRADE']."</td>
                                        <td width='35px' valign='top'>".$row_1['CREDITS']."</td>
                                        <td width='0px' valign='top'>&nbsp;</td>
                                    </tr>";
                                }
                            }
                            else
                                if($row_1['ISBACKLOG']=='Y'||$row_1['ISBACKLOG']=='y')
                                {
                                    if($Erows[$Ei]['VISIBLE']==0){
                                        $output .="<tr height='10px'>
                                    <td width='225px' valign='top'>".$row_1['SUBJECTNAME']."<sup>*</sup></td>
                                    <td width='5px' valign='top'>&nbsp;</td>
                                    <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['MAXIMUMMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['OBTAINEDMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' valign='top'>&nbsp;&nbsp;&nbsp;".$row_1['OBTAINEDGRADE']."</td>
                                    <td width='35px' valign='top'>&nbsp;&nbsp;&nbsp;&nbsp;".$row_1['CREDITS']."</td>
                                    <td width='0px' valign='top'>&nbsp;</td>
                                </tr>"; 
                                    }
                                    else{
                                        $output .="<tr height='10px'>
                                    <td width='225px' valign='top'>".$row_1['SUBJECTNAME']."<sup>*</sup></td>
                                    <td width='5px' valign='top'>&nbsp;</td>
                                    <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['MAXIMUMMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['OBTAINEDMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' valign='top'>&nbsp;&nbsp;&nbsp;".$row_1['OBTAINEDGRADE']."</td>
                                    <td width='35px' valign='top'>&nbsp;&nbsp;&nbsp;&nbsp;".$row_1['CREDITS']."</td>
                                    <td width='0px' valign='top'>&nbsp;</td>
                                </tr>"; 
                                    }

                                }
                            else
                            {
                                $output .="<tr height='10px'>
                                    <td width='225px' valign='top'>".$row_1['SUBJECTNAME']."</td>
                                    <td width='5px' valign='top'>&nbsp;</td>
                                    <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['MAXIMUMMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['OBTAINEDMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' valign='top'>&nbsp;&nbsp;&nbsp;".$row_1['OBTAINEDGRADE']."</td>
                                    <td width='35px' valign='top'>&nbsp;&nbsp;&nbsp;&nbsp;".$row_1['CREDITS']."</td>
                                    <td width='0px' valign='top'>&nbsp;</td>
                                </tr>";
                            }



                            //$tot_credits +=$row_1['CREDITS'];
                            if($Erows[$Ei]['CGPA'])
                                $sumGPxCredits += ( $GP * $row_1['CREDITS']); 

                            //$final_credits += $tot_credits;
                            if($Erows[$Ei]['CREDITS'])
                                $final_credits += $row_1['CREDITS'];
                            if($Erows[$Ei]['MARKS'])
                                $final_obt_marks += $row_1['OBTAINEDMARKS'];

                            if($Erows[$Ei]['MARKS'])
                                $final_max_marks += $row_1['MAXIMUMMARKS'];
                        }
                    }
                    else
                    {

                        //first column
                        //if($row_1['SUBJECTCODE'] == "" && $row_1['EXAMDETAIL']!="AGG")
                        if($row_1['SUBJECTCODE'] == "")
                        {
                            //echo "hello";
                            /*
                            $output .="<tr>
                                <td width='225px' valign='top'><strong>TOTAL</strong></td>
                                <td width='5px' valign='top'>&nbsp;</td>
                                <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'><strong>".format_marks($row_1['MAXIMUMMARKS'])."</strong></td>
                                <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'><strong>".format_marks($row_1['OBTAINEDMARKS'])."</strong></td>
                                <td width='37px' valign='top'>-</td>
                                <td width='35px' valign='top'><strong>".$tot_credits."</strong></td>
                                <td width='0px' valign='top'>&nbsp;</td>
                            </tr>";
                            */
                            //$output .="<tr><td colspan='6' valign='top'>&nbsp;</td></tr>"; $lineCount++;
                            //                            $final_credits += $tot_credits;
                            //                            $final_obt_marks += $row_1['OBTAINEDMARKS'];
                            //                            $final_max_marks += $row_1['MAXIMUMMARKS'];
                        }
                        else
                        {
                            $res_2 = mysqli_query($connect,"SELECT * FROM $gpa_master WHERE `GRADE` = '".$row_1['OBTAINEDGRADE']."'") or die(mysqli_error($connect));
                            $GP = 0;
                            $r_2 = mysqli_fetch_array($res_2);
                            $GP = $r_2['GRADEPOINT'];
                            //                        while($r_2 = mysqli_fetch_array($res_2))
                            //                        {
                            //                            
                            //                            if($row_1['OBTAINEDMARKS'] <= $r_2['UPPER'] && $row_1['OBTAINEDMARKS'] >= $r_2['LOWER'])
                            //                                $GP = $r_2['GRADEPOINT'];
                            //                            if($GP != 0)
                            //                            {
                            //                                break;
                            //                            }
                            //                        }

                            if($row_1['SUBJECTCODE']=="MPS134BI1"||$row_1['SUBJECTCODE']=="MPS134AI1")
                            {
                                if($row_1['ISBACKLOG']=='Y'||$row_1['ISBACKLOG']=='y')
                                {
                                    $output .="<tr height='10px'>
                                        <td width='225px' valign='top'>".$row_1['SUBJECTNAME']."</td>
                                        <td width='5px' valign='top'>&nbsp;</td>
                                        <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>-</td>
                                        <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>-<sup>*</sup></td>
                                        <td width='37px' valign='top'>".$row_1['OBTAINEDGRADE']."</td>
                                        <td width='35px' valign='top'>".$row_1['CREDITS']."</td>
                                        <td width='10px' valign='top'>&nbsp;</td>
                                    </tr>"; 
                                }
                                else
                                {
                                    $output .="<tr height='10px'>
                                        <td width='225px' valign='top'>".$row_1['SUBJECTNAME']."</td>
                                        <td width='5px' valign='top'>&nbsp;</td>
                                        <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>-</td>
                                        <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>-</td>
                                        <td width='37px' valign='top'>".$row_1['OBTAINEDGRADE']."</td>
                                        <td width='35px' valign='top'>".$row_1['CREDITS']."</td>
                                        <td width='10px' valign='top'>&nbsp;</td>
                                    </tr>";
                                }
                            }
                            else
                                if($row_1['ISBACKLOG']=='Y'||$row_1['ISBACKLOG']=='y')
                                {
                                    if($Erows[$Ei]['VISIBLE']==0){
                                        $output .="<tr height='10px'>
                                    <td width='225px' valign='top'>".$row_1['SUBJECTNAME']."<sup>*</sup></td>
                                    <td width='5px' valign='top'>&nbsp;</td>
                                    <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['MAXIMUMMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['OBTAINEDMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' valign='top'>&nbsp;&nbsp;&nbsp;".$row_1['OBTAINEDGRADE']."</td>
                                    <td width='35px' valign='top'>&nbsp;&nbsp;&nbsp;&nbsp;".$row_1['CREDITS']."</td>
                                    <td width='10px' valign='top'>&nbsp;</td>
                                </tr>"; 
                                    }
                                    else{
                                        $output .="<tr height='10px'>
                                    <td width='225px' valign='top'>".$row_1['SUBJECTNAME']."<sup>*</sup></td>
                                    <td width='5px' valign='top'>&nbsp;</td>
                                    <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['MAXIMUMMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['OBTAINEDMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' valign='top'>&nbsp;&nbsp;&nbsp;".$row_1['OBTAINEDGRADE']."</td>
                                    <td width='35px' valign='top'>&nbsp;&nbsp;&nbsp;&nbsp;".$row_1['CREDITS']."</td>
                                    <td width='10px' valign='top'>&nbsp;</td>
                                </tr>"; 
                                    } 
                                }
                            else
                            {
                                $output .="<tr height='10px'>
                                    <td width='225px' valign='top'>".$row_1['SUBJECTNAME']."</td>
                                    <td width='5px' valign='top'>&nbsp;</td>
                                    <td width='35px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['MAXIMUMMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' style='font-family: \"Droid Sans Mono\", monospace;' valign='top'>".format_marks($row_1['OBTAINEDMARKS'], $Erows[$Ei]['VISIBLE'])."</td>
                                    <td width='37px' valign='top'>&nbsp;&nbsp;&nbsp;".$row_1['OBTAINEDGRADE']."</td>
                                    <td width='35px' valign='top'>&nbsp;&nbsp;&nbsp;&nbsp;".$row_1['CREDITS']."</td>
                                    <td width='0px' valign='top'>&nbsp;</td>
                                </tr>";
                            }
                            //$tot_credits +=$row_1['CREDITS'];
                            if($Erows[$Ei]['CGPA'])
                                $sumGPxCredits += ( $GP * $row_1['CREDITS']); 

                            //$final_credits += $tot_credits;
                            if($Erows[$Ei]['CREDITS'])
                                $final_credits += $row_1['CREDITS'];
                            if($Erows[$Ei]['MARKS'])
                                $final_obt_marks += $row_1['OBTAINEDMARKS'];

                            if($Erows[$Ei]['MARKS'])
                                $final_max_marks += $row_1['MAXIMUMMARKS'];
                        }
                    }


                }
            }
            $lineCount++;
            $output .="<tr height='10px'><td colspan='6' valign='top' style='height:5px;'>&nbsp;</td></tr>";//extra-line

        }

        for($j=1;$j<=($breakPoint-$lineCount);$j++)
            $output .="<tr height='10px'><td colspan='6' valign='top'>&nbsp;</td></tr>";

        $output .="</table> 
                </td></tr>";

        $res = mysqli_query($connect,"SELECT * FROM remarks where `STUDENTREGNO` = '".$row['STUDENTREGNO']."' ORDER BY `REMARKNO` ASC") or die(mysqli_error($connect));

        $remarkLine=0;
        $remarkTitle ="";

        $qwe = mysqli_query($connect,"SELECT * FROM `rename`") or die(mysqli_error($connect));
        $swe = mysqli_fetch_array($qwe);
        $remarkTitle = $swe['NAME'];

        $myArray = array();
        $maxLength=30;
        while($r = mysqli_fetch_array($res))
        {
            array_push($myArray,strlen($r['COMMENTS']));
        }
        $maxLength = max($myArray);
        $maxLength = $maxLength;
        $res = mysqli_query($connect,"SELECT * FROM remarks where `STUDENTREGNO` = '".$row['STUDENTREGNO']."' ORDER BY `REMARKNO` ASC") or die(mysqli_error($connect));
        $remarkCredits = 0;
        while($r = mysqli_fetch_array($res))
        {
            $remarkLine++;
            if($remarkLine==1)
            {   $output .="<tr height='10px' style='font-size:10px;font-family:sans-serif;'>
                        <td  colspan='2'><strong>$remarkTitle</strong></td>
                      </tr>";
             $remarkLine++;
            }
            $output .="<tr height='10px' style='font-size:10px;font-family:monospace;'>
                        <td  colspan='2'>&nbsp;".$r['COMMENTS'];

            if($r['CREDITS']!=0)
            {
                for($s=0;$s<($maxLength-strlen($r['COMMENTS']));$s++)
                    $output .="&nbsp;";
                if($r['CREDITS']==1)
                    $output .=" : ".$r['CREDITS']." credit";
                else
                    $output .=" : ".$r['CREDITS']." credits";
            }

            $output .="</td>
                      </tr>";
            //$sumGPxCredits += ( 4.0 * $r['CREDITS']); 
            $remarkCredits +=$r['CREDITS'];
            $final_credits +=$r['CREDITS'];
        }
        //        for($j=1;$j<=($remarkLine-1)+4;$j++)
        //            $output .="<tr height='10px' style='font-size:10px;font-family:sans-serif;'>
        //                        <td  colspan='2'>&nbsp;</td>
        //                      </tr>";
        if($final_credits == 0)
        {
            $CGPA = "NA";
        }
        else
        {
            $CGPA = round(($sumGPxCredits / ($final_credits-$remarkCredits)),3);
        }

        $percent = floor(($final_obt_marks/$final_max_marks)*100);
        $grade = "TEST";

        $res = mysqli_query($connect,"SELECT * FROM $master ORDER BY `UPPER` DESC") or die(mysqli_error($connect));
        while($r = mysqli_fetch_array($res))
        {
            $grade = "TEST";
            switch( $r['U_CONDITION'] ){
                case "EXCLUDE":
                    switch( $r['L_CONDITION'] ){
                        case "EXCLUDE":
                            if($percent < $r['UPPER'] && $percent > $r['LOWER'] )
                                $grade = $r['NAME'];
                            break;
                        case "INCLUDE":
                            if($percent < $r['UPPER'] && $percent >= $r['LOWER'] )
                                $grade = $r['NAME'];
                            break;
                    }
                    break;
                case "INCLUDE":
                    switch( $r['L_CONDITION'] ){
                        case "EXCLUDE":
                            if($percent <= $r['UPPER'] && $percent > $r['LOWER'] )
                                $grade = $r['NAME'];
                            break;
                        case "INCLUDE":
                            if($percent <= $r['UPPER'] && $percent >= $r['LOWER'] )
                                $grade = $r['NAME'];
                            break;
                    }                        
                    break;
            }
            if($grade !== "TEST")
            {
                break;
            }
        }

        $hr = 60;
        if($remarkSpace==0){
            $hr = 60;
        }

        $output .="
                <tr height='".($hr)."px'>
                    <td  colspan='2'>&nbsp;</td>
                </tr>";
        $output .="
            <tr height='30px'>
                <td  colspan='2'>
                    <table height='30px' border='0' cellspacing='0' cellpadding='0' style='font-size:12px; font-family:sans-serif; border-spacing:0px;table-layout: fixed;'>
                       <tr align='center' height='15px'>
                           <td width='150' style='font-size:6px;'>( Excluding Part I )</td> 
                           <td width='175' style='font-size:6px;'>( Excluding Part I )</td> 
                           <td width='185' style='font-size:6px;'>( Excluding Part I )</td> 
                           <td width='150' >&nbsp;</td> 
                           <td width='0' >&nbsp;</td>
                           <td width='0'>&nbsp;</td>
                       </tr>
                       <tr align='center' height='20px'>
                           <td>&nbsp;</td> 
                           <td>&nbsp;</td> 
                           <td>&nbsp;</td> 
                           <td>&nbsp;</td> 
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                       </tr>
                       <tr align='center' height='15px'>
                           <td><strong>$grade</strong></td> 
                           <td><strong>$final_obt_marks</strong></td> 
                           <td><strong>$final_max_marks</strong></td> 
                           <td><strong>$final_credits</strong></td> 
                           <td><strong>".number_format((float)$CGPA, 2, '.', '')."</strong></td>
                           <td>&nbsp;</td>
                       </tr> 
                    </table>
                </td>
            </tr>
            <tr height='50px'  >
                <td  colspan='2' style='line-height:14px;padding-left:120px;font-size:14px;padding-bottom:5px;'>$date</td>
            </tr>
        </table>
        <table height='1px' width='100%' style='display:block;page-break-after:always;'><tr><td>&nbsp;</td></tr></table>
        </body>
        </html>
        ";

    }
    echo $output;


}
else
{
    echo "INTRUDER...BOOOOOOO....!!!!";
}
?>