<?php
/* @var $this SolutionController */
/* @var $data Solution */
?>

<div class="view">
	<br/><br/><br/>
	<tr>
		<td>
			<?php 
					switch($data->cube_type) {
						case 0:
							echo CHtml::encode("2x2x2");
							break;
						case 1:
							echo CHtml::encode("3x3x3");
							break;
						case 2:
							echo CHtml::encode("4x4x4");
							break;
						case 3:
							echo CHtml::encode("5x5x5");
							break;
					}
			?>
		</td>
		<td><?php echo CHtml::encode($data->scramble); ?></td>
		<td><?php echo CHtml::encode($data->solve_time); ?></td>
		<td><?php 
					switch($data->goal) {
						case 0:
							echo CHtml::encode("Speed");
							break;
						case 1:
							echo CHtml::encode("Fewest Moves");
							break;
						case 2:
							echo CHtml::encode("Single-Handed");
							break;
						case 3:
							echo CHtml::encode("Blindfold");
							break;
					}
			?></td>
		<td><?php echo CHtml::encode($data->date); ?></td>
	</tr>	

</div>