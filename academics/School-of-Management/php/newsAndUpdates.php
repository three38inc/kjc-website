<style>
    .glyphicon
    {
        margin-right:4px !important; 

    }

    .pagination{
        display: none!important;
    }
    
    .pagination1 .glyphicon
    {
        margin-right:0px !important;
        /*		background-color:#555;*/
    }
    .prev,.next{
        font-size:10px;
        padding:0px;
        /*		background-color:#555;*/
    }
    .pagination1 a
    {
        color:#555;
    }
    .news.panel
    {
        border-color:white;
        height: 650px;
        overflow-y: hidden;
        box-shadow:none;
    }
    .panel ul
    {
        padding:0px;
        margin:0px;
        list-style:none;
    }
    .news .panel-body
    {
        padding-bottom:0;
        padding-top: 10px;

    }
    .panel-footer
    {
        float:right;
        padding:0px;
        /*		background-color:#555;*/
    }

    .panel-heading{
        padding-top:5px;
        padding-bottom: 10px;
    }

    .pagination1>li{
        display: inline;
    }
    
    .pagination1>li>a, .pagination1>li>span {
        position: relative;
        float: left;
        padding: 3px 15px;
        text-decoration: none;
        color: #777;
        background-color: #eee;
        border: 1px solid transparent;
        margin-left: -1px;
    }
    .pagination1>li>a:hover, .pagination1>li>span:hover,.pagination1>li>a:focus, .pagination1>li>span:focus {
        background-color: #ccc;
    }

    .pagination1>li:first-child>a, .pagination1>li:first-child>span {
        margin-left: 0;
        border-bottom-left-radius: 2px;
        border-top-left-radius: 2px;
    }
    .news-item
    {
        padding:15px 4px;
        font-size: 13px;
        margin:0px;
        border-bottom:1px dotted #555; 
    }
    .a-News-All,.a-News-All:active,.a-News-All:link{
        text-decoration: none;


    }
    .news-all{
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
    .news-all:hover{background-color: #eee;}
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


</style>
<div class="news panel panel-default" style="background-color:white;margin-bottom:0;max-height:650px;">
    <h4 class="mainheading"><i class="fa fa-bookmark"></i>

        <span>&nbsp;New &amp;<strong> Events</strong></span>

        <ul class="pagination1 pull-right" style="margin: 0px;">
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
                <ul class="demo1" >
                    <li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/exam.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>17 July 2017:</b> Commencement of Trimester I</td>

                            </tr>
                        </table>
                    </li>
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/exam.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>01 August 2017:</b> Commencement of Trimester IV</td>

                            </tr>
                        </table>
                    </li>
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/focus-icon.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>13, 14 & 15th Aug 2017:</b> Gramasamvedhitha</td>

                            </tr>
                        </table>
                    </li>
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/brightness-icon.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>07 Sep 2017:</b> Management Development Programme </td>

                            </tr>
                        </table>
                    </li>
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/check-icon.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>28 Sep 2017:</b> Intra Collegiate Management Fest - Talento 2K17 </td>

                            </tr>
                        </table>
                    </li>
					
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/hourglass-icon.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>24 &amp; 25 Nov 2017:</b> Inter Collegiate Management Fest - Synectics 2K17</td>

                            </tr>
                        </table>
                    </li>
					
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/easel-icon.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>29 &amp; 30 Nov 2017:</b> Faculty Development Programme </td>

                            </tr>
                        </table>
                    </li>
					
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/gear-icon.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>02 Feb 2018:</b> Panel Discussions  </td>

                            </tr>
                        </table>
                    </li>
					
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/news-icon.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>09 Feb 2018:</b> Abhigyan  2K18 - Management Through Theatre  </td>

                            </tr>
                        </table>
                    </li>
					
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/bookshelf-icon.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>21 Apr 2018:</b> Incognito 2K18 - Business Quiz Competition</td>

                            </tr>
                        </table>
                    </li>
					
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>

                                <td><img src="../../images/calendar-icon.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>27 &amp; 28 Apr 2018:</b> International Conference  - KRISYM 2K18</td>
                            </tr>
                        </table>
                    </li>
					
					<li class="news-item">
                        <table cellpadding="4">
                            <tr>
                                <td><img src="../../images/brush-pencil-icon.png" width="50" height="50" class="img-circle" /></td>
                                <td><b>27 &amp; 11 May 2018:</b> Ventura 2K18 - Business Plan Contest</td>
                            </tr>
                        </table>
                    </li>
					
					
					

                    
                </ul>
            </div>
        </div>
    </div>

    <a href="../../events/events.php" class="a-News-All">
        <div class="row news-all">
            <p>Read More</p>
        </div>
    </a>
    <!--	<div class="panel-footer"> </div>-->
</div>
