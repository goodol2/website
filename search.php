﻿<html>
	<title>goodol</title>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="./favicon.png">
	</head>
	<body>
		<style>
			.searchwindow {
			display: flex;
			height: 40px;
			flex: 1;
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
			img {
			vertical-align: middle;
			}
			.searchbox {
			display: flex;
			height: 40px;
			width: 85%;
			background: #ffffff;
			}
		</style>
		<br>
		<form name="getsearch" method="get">
		<div class="searchbox">
			<a href="./index.php"><img src="./goodol.png" height="40px" width="auto"></a>
			&nbsp;
			&nbsp;
			<div class="searchwindow">
				<input type="search" id="q" name="q" placeholder="검색어를 입력하세요" class="input_text" value="<?php echo $_GET["q"];?>">
				<button class="sch_smit">검색</button>
			</div>
		</div>
		</form>
		<script async src="https://cse.google.com/cse.js?cx=001307678989920408269:k9h9xxz6rrb"></script>
		<div class="gcse-searchresults-only"></div>
		<br>
		</div>
	</body>
</html>