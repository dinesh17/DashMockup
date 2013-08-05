<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</head>
<body>
	<script>
		$(function() {
			$( ".BackLogItem" ).draggable();
			$( ".InHand" ).droppable({
				accept: "#draggable",
				activeClass: "ui-state-hover",
				drop: function( event, ui ) {
					$('.InHandItem').append("<li>HI</li>");
					alert("Dropped");
				}
			});
		});
	</script>
	<div class"row col-lg-12">
		<div class="well">
			<h1>Engineering Dashboard</h1>
		</div>
	</div>
	<div class="row col-lg-12">
		<div class="row">
		<div class="col-lg-4 BackLog">
				<div class="well" style="padding:5px">
					<h3 align="center"><strong>BackLog</strong></h3>
					<ul class="BackLog list-group">
						<li class="BackLogItem list-group-item" style="z-index:1024">
							Complete HF Management Application by next Week
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 InHand">
				<div id="droppable" class="well" style="padding:5px">
					<h3 align="center"><strong>In hand</strong></h3>
					<ul class="InHandItem list-group">

					</ul>
				</div>
			</div>
			<div class="col-lg-4 Completed">
				<div class="well" style="padding:5px">
					<h3  align="center"><strong>Completed</strong></h3>
					<ul class="CompletedItem list-group">

					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
