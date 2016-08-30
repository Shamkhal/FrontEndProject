<?php
	session_start();
	include 'db.php';
	if (isset($_SESSION['admin']) && $_SESSION['admin'] = "admin") {
		if (isset($_GET['section'])) {
			$section = $_GET['section'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
</head>
<body>
	<?php
		if($section == "navbar") {
	?>	
			<div class="container">
				<div class="row">
					<h2>Create Header/Navbar Links</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST">
						<div class="form-group">
						<label for="name">Name</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="link">Link</label>
							<input type="text" id="link" name="link" class="form-control" placeholder="Link">
							<span>Don't insert '#' before link</span>
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Create">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div>
			</div>
	<?php
		} else if ($section == "clients") {
	?>
			<div class="container">
				<div class="row">
					<h2>Create client</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<label for="name">Name</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="name">
						</div>
						<div class="form-group">
							<label for="image">Select Logo</label>
							<input type="file" id="image" name="image">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Create">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div><!-- row -->
			</div>
	<?php
		} else if ($section == "features_list") {
	?>
			<div class="container">
				<div class="row">
					<h2>Create Features List</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST">
						<div class="form-group">
						<label for="icon">Icon class name</label>
							<input type="text" name="icon" class="form-control" id="icon" placeholder="Icon class name">
						</div>
						<div class="form-group">
						<label for="heading">Heading</label>
							<input type="text" name="heading" class="form-control" id="heading" placeholder="Heading">
						</div>
						<div class="form-group">
						<label for="heading">Description</label>
							<input type="text" name="description" class="form-control" id="description" placeholder="Description">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Create">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div>
			</div>
	<?php
		} else if ($section == "awards") {
	?>
			<div class="container">
				<div class="row">
					<h2>Create Awards</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<label for="link">Link</label>
							<input type="text" name="link" class="form-control" id="link" placeholder="Link">
							<span>Don't use # before link</span>
						</div>
						<div class="form-group">
							<label for="image">Select Logo</label>
							<input type="file" id="image" name="image">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Create">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div>
			</div>		
	<?php
		} else if ($section == "team") {
	?>
			<div class="container">
				<div class="row">
					<h2>Create Team Member</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<label for="name">Name</label>
							<input type="text" name="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
						<label for="position">Position</label>
							<input type="text" name="position" class="form-control" id="position" placeholder="Position">
						</div>
						<div class="form-group">
						<label for="about">About</label>
							<input type="text" name="about" class="form-control" id="about" placeholder="About">
						</div>
						<div class="form-group">
							<label for="image">Select Photo</label>
							<input type="file" id="image" name="image">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Create">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div>
			</div>
	<?php
		} else if ($section == "firsttab") {
	?>
			<div class="container">
				<div class="row">
					<h2>Create First Tab Button</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<label for="name">title</label>
							<input type="text" name="title" class="form-control" id="title" placeholder="Title">
						</div>
						<div class="form-group">
						<label for="position">titleBlue</label>
							<input type="text" name="titleBlue" class="form-control" id="titleBlue" placeholder="Special Word">
						</div>
						<div class="form-group">
						<label for="about">Subtitle</label>
							<input type="text" name="Subtitle" class="form-control" id="Subtitle" placeholder="Subtitle">
						</div>
						<div class="form-group">
							<label for="image">Select Photo</label>
							<input type="file" id="image" name="image">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Create">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div>
			</div>		
	<?php
		} else {
			throw_error("Error!");
		}
	?>
</body>
</html>
<?php
		}	
		if(isset($_POST['section'])) {
			$section = $_POST['section'];
			
			if($section == "navbar") {
				if (isset($_POST['name']) && isset($_POST['link'])) {
					$name = $_POST['name'];
					$link = "#".$_POST['link'];
					$sql_create = "INSERT INTO $section (name, link) VALUES ('$name', '$link')";
					if(mysqli_query($db_conn, $sql_create)) {
						throw_error("Success");
					} else {
						throw_error("Error!");
					}
				}
			} else if ($section == "clients") {
				if(isset($_POST['name']) && isset($_FILES['image'])) {
					$name = $_POST['name'];
					$currentDate = date("dmYHis");
					$filetype = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
					$filename = $currentDate . ".$filetype";
					$target_file = "../assets/images/" . $filename;
					if($filetype == "jpg" || $filetype == "png" || $filetype == "jpeg") {
						if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
							$sql_create = "INSERT INTO $section (client_name, image_path) VALUES ('$name', '$filename')";
							if(mysqli_query($db_conn, $sql_create)) {
								throw_error("Success");
							} else {
								throw_error("Error!");
							}
						}
					}
				}
			} else if ($section == "features_list") {
				if(isset($_POST['icon']) && isset($_POST['heading']) && isset($_POST['description'])) {
					$icon = $_POST['icon'];
					$heading = $_POST['heading'];
					$description = $_POST['description'];
					$sql_create = "INSERT INTO $section (icon_class, heading, description) VALUES ('$icon', '$heading', '$description')";
					if(mysqli_query($db_conn, $sql_create)) {
						throw_error("Success");
					} else {
						throw_error("Error!");
					}
				}
			} else if ($section == "awards") {
				if(isset($_POST['link']) && isset($_FILES['image'])) {
					$link = $_POST['link'];
					$currentDate = date("dmYHis");
					$filetype = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
					$filename = $currentDate . ".$filetype";
					$target_file = "../assets/images/" . $filename;
					if($filetype == "jpg" || $filetype == "png" || $filetype == "jpeg") {
						if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
							$sql_create = "INSERT INTO $section (link, image_path) VALUES ('$link', '$filename')";
							if(mysqli_query($db_conn, $sql_create)) {
								throw_error("Success!");
							} else {
								throw_error("Error!");
							}
						}
					}
				}
			} else if ($section == "team") {
				if(isset($_POST['name']) && isset($_POST['position']) && isset($_POST['about']) && isset($_FILES['image'])) {
					$name = $_POST['name'];
					$position = $_POST['position'];
					$about = $_POST['about'];
					$currentDate = date("dmYHis");
					$filetype = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
					$filename = $currentDate . ".$filetype";
					$target_file = "../assets/images/" . $filename;
					if($filetype == "jpg" || $filetype == "png" || $filetype == "jpeg") {
						if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
							$sql_create = "INSERT INTO $section (name, position, about, image_path) VALUES ('$name', '$position', '$about', '$filename')";
							if(mysqli_query($db_conn, $sql_create)) {
								throw_error("Success!");
							} else {
								throw_error("Error!");
							}
						}
					}
				}
			} else {
				throw_error("Invalid argument");
			}
		}
	} else {
		echo "Access Denied!";
	}
	function throw_error($err) {
		echo $err;
		header("Refresh:2; url=admin.php");
	}
?>