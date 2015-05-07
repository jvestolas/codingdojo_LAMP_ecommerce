<html>
<head>
	<title>Products Dashboard</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap-theme.min.css">
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.min.js"></script>

	<link href="http://hayageek.github.io/jQuery-Upload-File/uploadfile.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://hayageek.github.io/jQuery-Upload-File/jquery.uploadfile.min.js"></script>

	<style type="text/css">	
		.inline {
			display: inline-block;
			vertical-align: top;
		}	
		img {
			width: 60px;
			height: 60px;
		}	
		.select {
			margin-left: 72rem;
		}
		.pages {
			width: 365px;
			margin: 0 auto;
		}
		.topnav {
			width: 100%;
			margin: 5rem 0 1.5rem 0;
		}	
			.topnav * {
				width: 130px;				
				display: inline-block;
				vertical-align: top;
			}
			.topnav a {
				margin-top: 5px;
			}
			.topnav .logoff {
				margin-left: 63rem;
			}
			.topnav h3 {
				margin: 1rem 0 0 1rem;
			}

			.modalDialog {
				position: fixed;
				font-family: Arial, Helvetica, sans-serif;
				top: 0;
				right: 0;
				bottom: 0;
				left: 0;
				background: rgba(0,0,0,0.8);
				z-index: 99999;
				opacity:0;
				-webkit-transition: opacity 400ms ease-in;
				-moz-transition: opacity 400ms ease-in;
				transition: opacity 400ms ease-in;
				pointer-events: none;
			}

			.modalDialog:target {
				opacity:1;
				pointer-events: auto;
			}
				.close {
					background: #C61B1F;
					color: #FFFFFF;
					line-height: 25px;
					position: absolute;
					right: -12px;
					text-align: center;
					top: -10px;
					width: 24px;
					text-decoration: none;
					font-weight: bold;
					-webkit-border-radius: 12px;
					-moz-border-radius: 12px;
					border-radius: 12px;
					-moz-box-shadow: 1px 1px 3px #000;
					-webkit-box-shadow: 1px 1px 3px #000;
					box-shadow: 1px 1px 3px #000;
				}

				.close:hover { background: #00d9ff; }

				.modalDialog > div {
					width: 400px;
					position: relative;
					margin: 2% auto;
					padding: 5px 20px 13px 20px;
					border-radius: 10px;
					background: #fff;
					background: -moz-linear-gradient(#fff, #999);
					background: -webkit-linear-gradient(#fff, #999);
					background: -o-linear-gradient(#fff, #999);
				}

				.modalDialog > .modwrapper {
					width: 600px;
					height: 500px;
					margin-left: 0 auto;
				}
				.modalDialog > .modwrapper * {
					/*vertical-align: top;*/
				}

				.modalDialog > .modwrapper #name {
				margin-left: 130px;
				}
				.modalDialog > .modwrapper textarea {
					margin-left: 80px;
					width: 250px;
					height: 150px;
				}
				.modalDialog > .modwrapper #new_category {
					margin-left: 40px;
				}
				.modalDialog > #upload {
					width: 180px;
				}
				.modalDialog > .dropdown {
					margin: 7rem 1rem 2rem 22rem;
				}
				.modalDialog > p {
					height: 50px;
				}
				.modalDialog > .glyphicon {
					margin-left: 10px;
				}
				.modalDialog > .caret {
					vertical-align: middle;
				}		
				.modalDialog > a {
					color: black;
				}
	</style>
	<script type="text/javascript">
	$(document).ready(function() {
		$.get('/products/admin_show_all', function(res) {
			$('#partials').html(res);
		});

		// $(document).on('change', '#update_status', function(){
		// 	console.log($(this).val());
		// 	var value = $(this).val();
		// 	$(this).prev().attr('value', $(this).val());
		// 	console.log($(this).prev().attr('value', $(this).val()).val());
		// 	$.post( '/orders/update', $(this).parent().serialize(), function(res) {
		// 		console.log('updated!!!');
		// 	});
		// 	return false;
		// })
		console.log($('#1').val());
	})
	</script>
</head>
<body>
	<div class="container">
		<nav class="topnav navbar navbar-default">
		<h3>Dashboard</h3>
		<!-- clicking "Orders" or "Products" will send a get request to display partials -->
		<ul class="nav nav-pills nav-justified">
			<li><a href="/orders">Orders</a></li>
			<li class="active"><a href="/products/admin_index">Products</a></li>
			<li><a class="logoff" href="/admins/log_off">Log Off</a></li>
		</ul>
		</nav>		
		<div id="partials">
			
		</div>
		<form action="/orders/get_page">
			<input id="page" type="hidden" name="page" value="1">
			<nav class="pages" >
				<ul class="pagination">
					<li><a aria-label="Previous" href="#"><span aria-hidden="true">&laquo</span></a></li>
					<li>
						<a id="1"  href="#">1</a>
					</li>
					<li>
						<a href="#">2</a>
					</li>
					<li>
						<a href="#">3</a>
					</li>
					<li>
						<a href="#">4</a>
					</li>
					<li>
						<a href="#">5</a>
					</li>
					<li><a aria-label="Next" href="#"><span aria-hidden="true">&raquo</span></a></li>
				</ul>
			</nav>
		</form>
	</div>
</body>
</html>