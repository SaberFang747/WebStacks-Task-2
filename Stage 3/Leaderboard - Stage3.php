<html>
<head>
	<link rel="stylesheet" type="text/css" href="leaderstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Leaderboard</title>
</head>

<body>
	<div class="navbarcustom">
		<div class="custrow">
			<div class="column20">
				<p class="logo">WEBSTACKS</p>
			</div>
			<div class="column55">
				<form>
						<input type="text30" placeholder="Search by Name">
				</form>
			</div>

			<div class="column25">
				<button class="logbutton"><b>Logout</b></button>
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<br><br>
				<div class="w-75 card float-right text-center">
					<div class="card-body">
						<img src="profile_pic.png" width=180px height=180px class="center imgcircle">
						<br>
						<?php
			$conn = mysqli_connect("localhost","root","","leaderboard");
			if (!$conn) 
			{
   			die("Connection failed: " . mysqli_connect_error());
			}

			$i=3;
			$count=0;
			$sql="select * from ranking order by points desc";
			$result=mysqli_query($conn, $sql);
			$arr=array();
			while($row=mysqli_fetch_array($result))
			{
				$arr[]=$row;
				$count++;
			}
						echo "<h3 class=\"card-title\">".$arr[1]['name']."</h3>";
						echo "<img src=\"silver.png\" height=13px width=100% class=\"medal\">";
						echo "<h5 class=\"card-title\">2nd</h5>";
						echo "<div class=\"points1 center\">";
							echo $arr[1]['points'];
						echo "</div>";
						?>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="w-100 card text-center">
					<div class="card-body">
						<img src="profile_pic.png" width=220px height=220px class="center imgcircle">
						<br>
						<?php
			$conn = mysqli_connect("localhost","root","","leaderboard");
			if (!$conn) 
			{
   			die("Connection failed: " . mysqli_connect_error());
			}

			$i=3;
			$count=0;
			$sql="select * from ranking order by points desc";
			$result=mysqli_query($conn, $sql);
			$arr=array();
			while($row=mysqli_fetch_array($result))
			{
				$arr[]=$row;
				$count++;
			}
						echo "<h3 class=\"card-title\">".$arr[0]['name']."</h3>";
						echo "<img src=\"gold.png\" height=13px width=100% class=\"medal\">";
						echo "<h5 class=\"card-title\">1st</h5>";
						echo "<div class=\"points1 center\">";
							echo $arr[0]['points'];
						echo "</div>";
						?>
					</div>
				</div>
			</div>

			<div class="col-sm-4">
				<br><br>
				<div class="w-75 card text-center">
					<div class="card-body">
						<img src="profile_pic.png" width=180px height=180px class="center imgcircle">
						<br>
						<?php
			$conn = mysqli_connect("localhost","root","","leaderboard");
			if (!$conn) 
			{
   			die("Connection failed: " . mysqli_connect_error());
			}

			$i=3;
			$count=0;
			$sql="select * from ranking order by points desc";
			$result=mysqli_query($conn, $sql);
			$arr=array();
			while($row=mysqli_fetch_array($result))
			{
				$arr[]=$row;
				$count++;
			}
						echo "<h3 class=\"card-title\">".$arr[2]['name']."</h3>";
						echo "<img src=\"silver.png\" height=13px width=100% class=\"medal\">";
						echo "<h5 class=\"card-title\">3rd</h5>";
						echo "<div class=\"points1 center\">";
							echo $arr[2]['points'];
						echo "</div>";
						?>
					</div>
				</div>
			</div>
		</row>

		<table class="table">
			<tr class="table-light">
				<th class="tdroll">Sno.<th>
				<th class="tdpic">Profile</th>
				<th class="tdname">Name</th>
				<th class="tdpoints">Points</th>
			</tr>

			<?php
			$conn = mysqli_connect("localhost","root","","leaderboard");
			if (!$conn) 
			{
   			die("Connection failed: " . mysqli_connect_error());
			}

			$i=3;
			$count=0;
			$sql="select * from ranking order by points desc";
			$result=mysqli_query($conn, $sql);
			$arr=array();
			while($row=mysqli_fetch_array($result))
			{
				$arr[]=$row;
				$count++;
			}
			
			for($i=3;$i<$count;$i++)
			{
					echo "<tr class=\"table-light\">";
					echo "<td class=\"tdroll\">".($i+1)."<td>";
					echo "<td class=\"tdpic\"><img src=\"profile_pic.png\" width=40px height=40px class=\"center imgcircle\"></td>";
					echo "<td class=\"tdname\">".$arr[$i]['name']."</td>";
					echo "<td class=\"tdpoints\">".$arr[$i]['points']."</td>";
					echo "</tr>";
			}
			mysqli_close($conn);
			?>
		</table>
	</div>
</body>

</html>