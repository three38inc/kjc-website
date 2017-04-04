<style>
	.glyphicon
	{
		margin-right:4px !important; 
		
	}

	.pagination .glyphicon
	{
		margin-right:0px !important;
/*		background-color:#555;*/
	}
	.prev,.next{
		font-size:10px;
		padding:0px;
/*		background-color:#555;*/
	}
	.pagination a
	{
		color:#555;
	}
	.news.panel
	{
		border-color:white;
        height: 390px;
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
        padding-top:15px;
        padding-bottom: 20px;
    }
	
    .pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 3px 15px;
    text-decoration: none;
    color: #777;
    background-color: #eee;
    border: 1px solid transparent;
    margin-left: -1px;
}
    .pagination>li>a:hover, .pagination>li>span:hover,.pagination>li>a:focus, .pagination>li>span:focus {
        background-color: #ccc;
    }
    
    .pagination>li:first-child>a, .pagination>li:first-child>span {
    margin-left: 0;
    border-bottom-left-radius: 2px;
    border-top-left-radius: 2px;
}
	.news-item
	{
		padding:20px 4px;
        font-size: 13px;
		margin:0px;
		border-bottom:1px dotted #555; 
	}

</style>
<div class="news panel panel-default" style="background-color:white;margin-bottom:0;">
	<div class="panel-heading" style="background-color:white;font-size:19px;"> <span class="glyphicon glyphicon-list-alt" style="color:#2980b9"></span>&nbsp;News <div class="panel-footer"> </div></div>
	<div class="panel-body">
		<div class="row">
			<div class="col-xs-12">
				<ul class="demo1">
					<li class="news-item">
						<table cellpadding="4">
							<tr>
								<td><img src="../images/1.png" width="50" class="img-circle" /></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
							</tr>
						</table>
					</li>
					<li class="news-item">
						<table cellpadding="4">
							<tr>
								<td><img src="../images/2.png" width="50" class="img-circle" /></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
							</tr>
						</table>
					</li>
					<li class="news-item">
						<table cellpadding="4">
							<tr>
								<td><img src="../images/3.png" width="50" class="img-circle" /></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
							</tr>
						</table>
					</li>
					<li class="news-item">
						<table cellpadding="4">
							<tr>
								<td><img src="../images/4.png" width="50" class="img-circle" /></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
							</tr>
						</table>
					</li>
					<li class="news-item">
						<table cellpadding="4">
							<tr>
								<td><img src="../images/5.png" width="50" class="img-circle" /></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
							</tr>
						</table>
					</li>
					<li class="news-item">
						<table cellpadding="4">
							<tr>
								<td><img src="../images/6.png" width="50" class="img-circle" /></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
							</tr>
						</table>
					</li>
					<li class="news-item">
						<table cellpadding="4">
							<tr>
								<td><img src="../images/7.png" width="50" class="img-circle" /></td>
								<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
							</tr>
						</table>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!--	<div class="panel-footer"> </div>-->
</div>
<script type="text/javascript">
	$(function () {
		$(".demo1").bootstrapNews({
			newsPerPage: 5,
			autoplay: true,
			pauseOnHover:true,
			direction: 'up',
			newsTickerInterval: 2000,
			onToDo: function () {
				//console.log(this);
			}
		});
	});
</script>