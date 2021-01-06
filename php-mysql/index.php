<?php 

include*('/config/db_connect.php');

// write query for all pizzas
$sql = 'SELECT  title,ingredients, id FROM pizzas';

//make query $ get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result form memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

// print_r($pizzas);

// explode(',', $pizzas[0]['ingredients']);

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<h4 class='center grey-text'>pizzas</h4>
	<div class='container'>
		<div class='row'>

			<?php foreach($pizzas as $pizza): ?>

				<div class='col s6 md3'>
					<div class='card z-depth-0'>
						<div class="card-content center">
							<h5><?php echo htmlspecialchars($pizza['title']); ?></h5>
							<ul>
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
								<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action right-align">
						 <a href="#" class="brand-text">more info</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

			
		</div>
	</div>
	<?php include('templates/footer.php'); ?>
 
</html>