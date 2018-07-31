<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js"></script>
	<script src="app.js"></script>

</head>
<body>
	<div class="container" ng-controller="testController">
		<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
			<ul class="nav justify-content-center">
				<li class="nav-item">
					<a class="nav-link" href="javascript:;" ng-click="generater();">สร้างไฟล์ info.json</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="javascript:;" ng-click="upload();">upload ไฟล์ info.json</a>
				</li>
			<!-- 	<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li> -->
			</ul>
		</nav>


		<div class="row mt-4">
			<div class="col-sm-12">
				<div class="alert alert-dark" role="alert">
					{{ instance }}
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>