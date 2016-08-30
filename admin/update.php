<?php
	session_start();
	include 'db.php';
	if (isset($_SESSION['admin']) && $_SESSION['admin'] = "admin") {
		if (isset($_GET['section'])) {
			$section = $_GET['section'];
  			$id = $_GET["id"];
  			$sql_update = "SELECT * FROM $section WHERE id= '$id'";
  			$query = mysqli_query($db_conn, $sql_update);
  			$row = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
</head>
<body>
	<?php
		if($section == "navbar") {
	?>	
			<div class="container">
				<div class="row">
					<h2>Update Header/Navbar Links</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST">
						<div class="form-group">
						<label for="name">Name</label>
							<input type="text" name="name" class="form-control" id="name" value= "<?php echo $row['name']; ?>">
						</div>
						<div class="form-group">
							<label for="link">Link</label>
							<input type="text" id="link" name="link" class="form-control" value= "<?php echo $row['link']; ?>">
							<span>Don't insert '#' before link</span>
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Update">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div>
			</div>
	<?php
		} else if ($section == "clients") {
	?>
			<div class="container">
				<div class="row">
					<h2>Update client</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<label for="name">Name</label>
							<input type="text" name="name" class="form-control" id="name" value= "<?php echo $row['client_name']; ?>">
						</div>
						<div class="form-group">
							<label for="image">Select Logo</label>
							<input type="file" id="image" name="image">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Update">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div><!-- row -->
			</div>
	<?php
		} else if ($section == "features_list") {
	?>
			<div class="container">
				<div class="row">
					<h2>Update Features List</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST">
						<div class="form-group">
						<label for="icon">Icon class name</label>
							<input type="text" name="icon" class="form-control" id="icon" value= "<?php echo $row['icon_class']; ?>">
						</div>
						<div class="form-group">
						<label for="heading">Heading</label>
							<input type="text" name="heading" class="form-control" id="heading" value= "<?php echo $row['heading']; ?>">
						</div>
						<div class="form-group">
						<label for="heading">Description</label>
							<input type="text" name="description" class="form-control" id="description" value= "<?php echo $row['description']; ?>">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Update">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div>
			</div>
	<?php
		} else if ($section == "awards") {
	?>
			<div class="container">
				<div class="row">
					<h2>Update Awards</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<label for="link">Link</label>
							<input type="text" name="link" class="form-control" id="link" value= "<?php echo $row['link']; ?>">
							<span>Don't use # before link</span>
						</div>
						<div class="form-group">
							<label for="image">Select Logo</label>
							<input type="file" id="image" name="image">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Update">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div>
			</div>		
	<?php
		} else if ($section == "team") {
	?>
			<div class="container">
				<div class="row">
					<h2>Update Team Member</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<label for="name">Name</label>
							<input type="text" name="name" class="form-control" id="name" value= "<?php echo $row['name']; ?>">
						</div>
						<div class="form-group">
						<label for="position">Position</label>
							<input type="text" name="position" class="form-control" id="position" value= "<?php echo $row['position']; ?>">
						</div>
						<div class="form-group">
						<label for="about">About</label>
							<input type="text" name="about" class="form-control" id="about" value= "<?php echo $row['about']; ?>">
						</div>
						<div class="form-group">
							<label for="image">Select Photo</label>
							<input type="file" id="image" name="image">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Update">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div>
			</div>	
	<?php
		} else if ($section == "information") {
	?>
			<div class="container">
				<div class="row">
					<h2>Update Information</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<label for="content">Content</label>
							<input type="text" name="content" class="form-control" id="content" value= "<?php echo $row['content']; ?>">
						</div>
						<div class="form-group">
						<label for="writer">Writer</label>
							<input type="text" name="writer" class="form-control" id="writer" value= "<?php echo $row['writer']; ?>">
						</div>
						<div class="form-group">
							<label for="image">Select Logo</label>
							<input type="file" id="image" name="image">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Update">
						<a href="admin.php" class="btn btn-default">Back</a>
					</form>
				</div>
			</div>	
			<?php
		} else if ($section == "contact") {
	?>
			<div class="container">
				<div class="row">
					<h2>Update Contact</h2>
				</div><!-- row -->
				<div class="row">
					<form action="" method="POST">
						<div class="form-group">
						<label for="mail">Mail</label>
							<input type="text" name="mail" class="form-control" id="mail" value= "<?php echo $row['mail']; ?>">
						</div>
						<div class="form-group">
						<label for="adress">Adress</label>
							<input type="text" name="adress" class="form-control" id="adress" value= "<?php echo $row['adress']; ?>">
						</div>
						<div class="form-group">
						<label for="phone_number">Phone Number</label>
							<input type="text" name="phone_number" class="form-control" id="phone_number" value= "<?php echo $row['phone_number']; ?>">
						</div>
						<input type="hidden" name="section" value="<?=$section?>">
						<input type="submit" name="submit" class="btn btn-success" value="Update">
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
					$sql_update = "UPDATE `$section` SET `name`='$name',`link`='$link' WHERE id = $id";
					if(mysqli_query($db_conn, $sql_update)) {
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
							$sql_update = "UPDATE `$section` SET `client_name`='$name',`image_path`='$filename' WHERE id = $id";

							if(mysqli_query($db_conn, $sql_update)) {
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
					$sql_update = "UPDATE `$section` SET `icon_class`='$icon',`heading`='$heading',`description`='$description' WHERE id = $id";

					if(mysqli_query($db_conn, $sql_update)) {
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
							$sql_update = "UPDATE `$section` SET `link`='$link',`image_path`='$filename' WHERE id = $id";


							if(mysqli_query($db_conn, $sql_update)) {
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
							$sql_update = "UPDATE `$section` SET `name`='$name', `position`='$position', `about`='$about', `image_path`='$filename' WHERE id =$id";
							if(mysqli_query($db_conn, $sql_update)) {
								throw_error("Success!");
							} else {
								throw_error("Error!");
							}
						}
					}
				}
			}else if ($section == "information") {
				if(isset($_POST['content']) && isset($_POST['writer']) && isset($_FILES['image'])) {
					$content = $_POST['content'];
					$writer = $_POST['writer'];
					$currentDate = date("dmYHis");
					$filetype = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
					$filename = $currentDate . ".$filetype";
					$target_file = "../assets/images/" . $filename;
					if($filetype == "jpg" || $filetype == "png" || $filetype == "jpeg") {
						if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
							$sql_update = "UPDATE information SET content='$content', writer='$writer', image_path='$filename' WHERE id =$id";
							if(mysqli_query($db_conn, $sql_update)) {
								throw_error("Success!");
							} else {
								throw_error("ERROR!");
							}
						}
					}
				}
			}else if ($section == "contact") {
				if(isset($_POST['mail']) && isset($_POST['adress']) && isset($_POST['phone_number'])) {
					$mail = $_POST['mail'];
					$adress = $_POST['adress'];
					$phone_number = $_POST['phone_number'];
					$sql_update = "UPDATE `$section` SET `mail`='$mail',`adress`='$adress',`phone_number`='$phone_number' WHERE id = $id";

					if(mysqli_query($db_conn, $sql_update)) {
						throw_error("Success");
					} else {
						throw_error("Error!");
					}
				}
			}
			 else {
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