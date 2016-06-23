<!DOCTYPE HTML>
<html>
<head>
	<title>Fruit Database</title>
	<link rel="stylesheet" href="css/master.css">
</head>
<body>
	<section id="add-fruit">
		<div class="container">
			<div class="row">
                <h1> Fruits Database</h1>
                <center>Please enter a fruit & a fruit color below!<br><hr>
				</div>
                        <?php
                        $user="root";
                        $pass="root";
                        $dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

                        if ($_SERVER['REQUEST_METHOD']=='POST') {
						    $fruitname = $_POST['fruit-name'];
						    $fruitcolor = $_POST['fruit-color'];
						    $stmt = $dbh->prepare("INSERT INTO fruits (fruitname, fruitcolor) VALUES (:fruitname, :fruitcolor);");
						    $stmt->bindParam(':fruitname', $fruitName);
						    $stmt->bindParam(':fruitcolor', $fruitColor);
						    $stmt->execute();
					}

					?>
            <!--form-->
					<form class="form well clearfix" method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
						<div class="form-group">
							<label for="fruit-name">Fruit Name<sup>*</sup></label>
							<input type="text" id="fruit-name" class="form-control" name="fruit-name" required>
						</div>
						<div class="form-group">
							<label for="fruit-color">Fruit Color<sup>*</sup></label>
							<input type="text" id="fruit-color" class="form-control" name="fruit-color" required>
						</div>
						<div class="form-group">
							<label for="fruit-image">Fruit Image</label>
							<input type="text" id="fruit-image" class="form-control" name="fruit-image" placeholder="http://example.com/image.jpg">
						</div>
						<button class="btn btn-primary pull-right" type="submit">Add Fruit</button>
					</form>
            <!--end form-->


				</div>
			</div>
		</div>
	</section>
	<section id="manage-fruit">
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>Fruit ID</th>
							<th>Fruit Name</th>
							<th>Fruit Color</th>
                            <th>Fruit Image</th>
							<th>Delete Fruit</th>
						</tr>
					</thead>
					<tbody>
					<?php

					//use pdo object to prepare a select statement
					$stmt = $dbh->prepare('SELECT id, fruitname, fruitcolor FROM fruits;');
					//execute selection
					$stmt->execute();
					$result = $stmt->fetchall(PDO::FETCH_ASSOC);

					//for each row returned
					foreach($result as $row){
						//echo out the id, name, color
						$markup = '<tr>';
						$markup .= '<td>'.$row['id'].'</td>';
						$markup .= '<td>'.$row['fruitname'].'</td>';
						$markup .= '<td>'.$row['fruitcolor'].'</td>';
                        $markup .= '<td>'.$row['fruitimage'].'</td>';
						//last column contains a link to deletefruit.php passing the associated id as a url param
						$markup .= '<td><a href="deletefruit.php?id='.$row['id'].'" class="btn btn-danger btn-sm btn-block">Delete</a></td>';
						$markup .= '</tr>';
						echo $markup;
					} //end row for loop

					?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</body>
</html>