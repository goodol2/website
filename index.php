﻿<html>
	<title>goodol</title>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="icon" href="./favicon.png">
	</head>
	<body>
		<style>
			.searchwindow {
			display: flex;
			height: 40px;
			width: 85%;
			border: 1px solid #cccccc;
			background: #ffffff;
			}
			.input_text {
			flex: 1;
			font-size: 16px;
			padding: 10px;
			border: 0px;
			outline: none;
			float: left;
			}
			.sch_smit {
			width: 50px;
			height: 40px;
			border: 0px;
			background: #cccccc;
			outline: none;
			float: right;
			color: #ffffff
			}
		</style>
		<center>
			<br>
			<a href="./index.php"><img src="./goodol.png" width="55%" height="auto"></a>
			<br>
			<br>
			<div>
				<form name="search" id="search" method="get" action="./search.php">
					<div class="searchwindow">
						<input type="search" name="q" class="input_text" placeholder="검색어를 입력하세요">
						<button class="sch_smit">검색</button>
					</div>
				</form>
			</div>
		</center>
	</body>
</html>