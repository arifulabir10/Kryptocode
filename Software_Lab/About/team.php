<!DOCTYPE html>
<html>
<head>
	<title>About Our Team</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		h1 {
			font-size: 36px;
			text-align: center;
		}

		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
		}

		.member {
			text-align: center;
			margin: 20px;
			width: 300px;
		}

		.member img {
			display: block;
			margin: 0 auto;
			border-radius: 50%;
			width: 200px;
			height: 200px;
			object-fit: cover;
		}

		.verified {
			position: absolute;
			top: 10px;
			right: 10px;
			background-color: #3cb371;
			color: #fff;
			padding: 5px;
			font-size: 14px;
			border-radius: 50%;
		}
	</style>
</head>
<body>
	<h1>About Our Team</h1>
	<div class="container">
		<div class="member">
			<img src="member1.jpg" alt="member1">
			<span class="verified">&#10004; Verified</span>
			<h2>Ariful Islam</h2>
			<p>Developer</p>
		</div>
		<div class="member">
			<img src="member2.jpg" alt="Member 2">
			<h2>Farhan Shahriar Alvi</h2>
			<p>Developer</p>
		</div>
		<div class="member">
			<img src="member3.jpg" alt="Member 3">
			<h2>Jinnat Ara</h2>
			<p>Developer and Desgner</p>
		</div>
        <div class="member">
			<img src="member4.jpg" alt="Member 4">
			<h2>Tarikuzzaman Tuhin</h2>
			<p>Developer</p>
		</div>
        <div class="member">
			<img src="member5.jpg" alt="Member 5">
			<h2>Most. Sumiya Yeasmin Labannya</h2>
			<p>Project Manager and Developer</p>
		</div>
        
	</div>
</body>
</html>
