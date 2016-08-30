<?php
	include 'db.php';
	session_start();
	if (isset($_SESSION['admin']) && $_SESSION['admin'] = "admin") {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
	<style>
		td:last-child {
			text-align: center;
		}
	</style>
</head>
<body>
<h1> Agilli OL</h1>
<h1> Agilli OLMA</h1>
	<div class="container">
		<div class="row">
			<h3>Welcome, Admin</h3><br>
			<a href="logout.php?value=sdefregrerefe156465sdsa" class="btn btn-danger">Log out</a>
			<table class="table table-striped table-bordered table-hover">
				<caption>Header/Navbar Links</caption>
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Link</th>
					<th>Action</th>
				</thead>
				<tbody>		
				<?php
					if($db_conn) {
						$sql_select_all = "SELECT * FROM navbar";
						$query = mysqli_query($db_conn, $sql_select_all);
						if ($query) {
							$i = 0;
							while ($result = mysqli_fetch_assoc($query)) {
								$id = $result['id'];
				?>
								<tr>
									<td><?=$id?></td>
									<td><?=$result['name']?></td>
									<td><?=$result['link']?></td>
									<td>
									<a href="delete.php?section=navbar&id=<?=$id?>" class="btn btn-danger">Delete</a>
									<a href="update.php?section=navbar&id=<?=$id?>" class="btn btn-primary">update</a>
									</td>
								</tr>
				<?php
							}
						}
					}
				?>
				</tbody>
			</table>
			<a href="create.php?section=navbar" class="btn btn-success pull-right">Create</a><br><br><br>

			<table class="table table-striped table-bordered table-hover">
				<caption>Clients</caption>
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Image path</th>
					<th>Image</th>
					<th>Action</th>
				</thead>
				<tbody>		
					<?php
						if($db_conn) {
							$sql_select_all = "SELECT * FROM clients";
							$query = mysqli_query($db_conn, $sql_select_all);
							if ($query) {
								$i = 0;
								while ($result = mysqli_fetch_assoc($query)) {
									$id = $result['id'];
					?>
									<tr>
										<td><?=$id?></td>
										<td><?=$result['client_name']?></td>
										<td><?=$result['image_path']?></td>
										<td><img width="75px" height="75px" src="../assets/images/<?=$result['image_path']?>" alt=""></td>
										<td>
										<a href="delete.php?section=clients&id=<?=$id?>" class="btn btn-danger">Delete</a>
										<a href="update.php?section=clients&id=<?=$id?>" class="btn btn-primary">update</a>
										</td>
									</tr>
					<?php
								}
							}
						}
					?>
				</tbody>
			</table>
			<a href="create.php?section=clients" class="btn btn-success pull-right">Create</a><br><br><br>

			<table class="table table-striped table-bordered table-hover">
				<caption>Features List</caption>
				<thead>
					<th>ID</th>
					<th>Icon Class</th>
					<th>Heading</th>
					<th>Description</th>
					<th>Action</th>
				</thead>
				<tbody>		
					<?php
						if($db_conn) {
							$sql_select_all = "SELECT * FROM features_list";
							$query = mysqli_query($db_conn, $sql_select_all);
							if ($query) {
								$i = 0;
								while ($result = mysqli_fetch_assoc($query)) {
									$id = $result['id'];
					?>
									<tr>
										<td><?=$id?></td>
										<td><?=$result['icon_class']?></td>
										<td><?=$result['heading']?></td>
										<td><?=$result['description']?></td>
										<td>
										<a href="delete.php?section=features_list&id=<?=$id?>" class="btn btn-danger">Delete</a>
										<a href="update.php?section=features_list&id=<?=$id?>" class="btn btn-primary">update</a>
										</td>
									</tr>
					<?php
								}
							}
						}
					?>
				</tbody>
			</table>
			<a href="create.php?section=features_list" class="btn btn-success pull-right">Create</a><br><br><br>

			<table class="table table-striped table-bordered table-hover">
				<caption>Awards</caption>
				<thead>
					<th>ID</th>
					<th>Link</th>
					<th>Image Path</th>
					<th>Image</th>
					<th>Action</th>
				</thead>
				<tbody>		
					<?php
						if($db_conn) {
							$sql_select_all = "SELECT * FROM awards";
							$query = mysqli_query($db_conn, $sql_select_all);
							if ($query) {
								$i = 0;
								while ($result = mysqli_fetch_assoc($query)) {
									$id = $result['id'];
					?>
									<tr>
										<td><?=$id?></td>
										<td><?=$result['link']?></td>
										<td><?=$result['image_path']?></td>
										<td><img width="75px" height="75px" src="../assets/images/<?=$result['image_path']?>" alt=""></td>
										<td>
										<a href="delete.php?section=awards&id=<?=$id?>" class="btn btn-danger">Delete</a>
										<a href="update.php?section=awards&id=<?=$id?>" class="btn btn-primary">update</a>
										</td>
									</tr>
					<?php
								}
							}
						}
					?>
				</tbody>
			</table>
			<a href="create.php?section=awards" class="btn btn-success pull-right">Create</a><br><br><br>

			<table class="table table-striped table-bordered table-hover">
				<caption>Team</caption>
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Position</th>
					<th>About Member</th>
					<th>Image Path</th>
					<th>Image</th>
					<th>Action</th>
				</thead>
				<tbody>		
					<?php
						if($db_conn) {
							$sql_select_all = "SELECT * FROM team";
							$query = mysqli_query($db_conn, $sql_select_all);
							if ($query) {
								$i = 0;
								while ($result = mysqli_fetch_assoc($query)) {
									$id = $result['id'];
					?>
									<tr>
										<td><?=$id?></td>
										<td><?=$result['name']?></td>
										<td><?=$result['position']?></td>
										<td><?=$result['about']?></td>
										<td><?=$result['image_path']?></td>
										<td><img width="75px" height="75px" src="../assets/images/<?=$result['image_path']?>" alt=""></td>
										<td>
										<a href="delete.php?section=team&id=<?=$id?>" class="btn btn-danger">Delete</a>
										<a href="update.php?section=team&id=<?=$id?>" class="btn btn-primary">update</a>
										</td>
									</tr>
					<?php
								}
							}
						}
					?>
				</tbody>
			</table>
			<a href="create.php?section=team" class="btn btn-success pull-right">Create</a><br><br><br>
			<table class="table table-striped table-bordered table-hover">
				<caption>Team</caption>
				<thead>
					<th>ID</th>
					<th>Content</th>
					<th>Writer</th>
					<th>Logo Path</th>
					<th>Logo</th>
					<th>Action</th>
				</thead>
				<tbody>		
					<?php
						if($db_conn) {
							$sql_select_all = "SELECT * FROM footer";
							$query = mysqli_query($db_conn, $sql_select_all);
							if ($query) {
								$i = 0;
								while ($result = mysqli_fetch_assoc($query)) {
									$id = $result['id'];
					?>
									<tr>
										<td><?=$id?></td>
										<td><?=$result['content']?></td>
										<td><?=$result['title']?></td>
										<td><?=$result['image_path']?></td>
										<td><img width="75px" height="75px" src="../assets/images/<?=$result['image_path']?>" alt=""></td>
										<td>

										</td>										
									</tr>
					<?php
								}
							}
						}
					?>
				</tbody>
			</table>
			<a href="update.php?section=footer&id=<?=$id?>" class="btn btn-primary">update</a>
		</div>
	</div>
</body>
</html>
<?php
			} else {
				unset($_SESSION['admin']);
				echo "Access denied!";
			}
		mysqli_close($db_conn);
?>