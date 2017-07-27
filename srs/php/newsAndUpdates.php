<style>
    .glyphicon {
        margin-right: 4px !important;
    }
    
    .pagination .glyphicon {
        margin-right: 0px !important;
        /*		background-color:#555;*/
    }
    
    .prev,
    .next {
        font-size: 10px;
        padding: 0px;
        /*		background-color:#555;*/
    }
    
    .pagination a {
        color: #555;
    }
    
    .news.panel {
        border-color: white;
        height: 340px;
        overflow-y: hidden;
        box-shadow: none;
    }
    
    .panel ul {
        padding: 0px;
        margin: 0px;
        list-style: none;
    }
    
    .news .panel-body {
        padding-bottom: 0;
        padding-top: 10px;
    }
    
    .panel-footer {
        float: right;
        padding: 0px;
        /*		background-color:#555;*/
    }
    
    .panel-heading {
        padding-top: 5px;
        padding-bottom: 10px;
    }
    
    .pagination>li>a,
    .pagination>li>span {
        position: relative;
        float: left;
        padding: 3px 15px;
        text-decoration: none;
        color: #777;
        background-color: #eee;
        border: 1px solid transparent;
        margin-left: -1px;
    }
    
    .pagination>li>a:hover,
    .pagination>li>span:hover,
    .pagination>li>a:focus,
    .pagination>li>span:focus {
        background-color: #ccc;
    }
    
    .pagination>li:first-child>a,
    .pagination>li:first-child>span {
        margin-left: 0;
        border-bottom-left-radius: 2px;
        border-top-left-radius: 2px;
    }
    
    .news-item {
        padding: 15px 4px;
        font-size: 13px;
        margin: 0px;
        border-bottom: 1px dotted #555;
    }
    
    .a-News-All,
    .a-News-All:active,
    .a-News-All:link {
        text-decoration: none;
    }
    
    .news-all {
        background-color: #fff;
        height: 40px;
        width: 97%;
        /*        box-shadow: 0px -1px 5px #bdc3c7;*/
        z-index: 1000;
        margin-left: -10px;
        position: absolute;
        bottom: 0;
        text-align: center;
        padding: 10px;
        border-radius: 2px;
        border: 1px solid #eee;
    }
    
    .news-all:hover {
        background-color: #eee;
    }
    
    .news-all:active {
        background-color: #eee;
        /*		box-shadow: 0 5px #ddd;*/
        transform: translateY(4px);
    }
    
    @media only screen and (max-width: 767px) {
        .news-all {
            /*			margin-top: -8%;*/
        }
    }
    .img-circle{margin-right: 10px;border-radius: 0%;}

</style>
<div class="news panel panel-default" style="background-color:white;margin-bottom:0;max-height:650px;">
    <h4 class="mainheading" style="padding-top: 7px;"><i class="fa fa-bookmark"></i>
        <span><span style="font-size:1.2em;">I</span>mportant <strong> Dates</strong></span>
        <ul class="pagination pull-right" style="margin: 0px;">
            <li>
                <a href="#" class="prev" id="prev-high">
                    <i class="fa fa-chevron-left"></i>
                </a>
            </li>
            <li>
                <a href="#" class="next" id="next-high">
                    <i class="fa fa-chevron-right"></i>
                </a>
            </li>
        </ul>
    </h4>
    <div class="panel-body">
        <div class="row">
            <div class="col-xs-12">
                <ul class="demo1">
					
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>
                                <td><img src="../images/news/interview.png" width="50" height="50" class="img-circle" /></td>
								<td><b>August 10<sup>th</sup> :- </b> Full paper submission
								</td>
                            </tr>
                        </table>
                    </li>
					
					 <li class="news-item">
                        <table cellpadding="4">
                            <tr>
                                <td><img src="../images/news/interview.png" width="50" height="50" class="img-circle" /></td>
								<td><b>August 20<sup>th</sup> :- </b> Notification of acceptance</td>
                            </tr>
                        </table>
                    </li>
					
					
                    <li class="news-item">
                        <table cellpadding="4">
                            <tr>
                                <td><img src="../images/news/interview.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>August 25<sup>th</sup> :- </b> Camera ready copy / Author registration</td>
                            </tr>
                        </table>
                    </li>
					
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>
                                <td><img src="../images/news/interview.png" width="50" height="50" class="img-circle" /></td>
								<td><b>August 10<sup>th</sup> :- </b> Full paper submission
								</td>
                            </tr>
                        </table>
                    </li>
					
					 <li class="news-item">
                        <table cellpadding="4">
                            <tr>
                                <td><img src="../images/news/interview.png" width="50" height="50" class="img-circle" /></td>
								<td><b>August 20<sup>th</sup> :- </b> Notification of acceptance</td>
                            </tr>
                        </table>
                    </li>
					
					
                    <li class="news-item">
                        <table cellpadding="4">
                            <tr>
                                <td><img src="../images/news/interview.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>August 25<sup>th</sup> :- </b> Camera ready copy / Author registration</td>
                            </tr>
                        </table>
                    </li>
					
					
                   
                   
                  
					
					   
                </ul>
            </div>
        </div>
    </div>

    <a href="../events/events.php" class="a-News-All">
        <div class="row news-all">
            <p>Read More</p>
        </div>
    </a>
    <!--	<div class="panel-footer"> </div>-->
</div>