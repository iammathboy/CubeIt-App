<?php
	/* @var $this SiteController */
	$this->pageTitle=Yii::app()->name;
	$baseUrl = Yii::app()->baseUrl; 
	$cs = Yii::app()->getClientScript();
	$cs->registerScriptFile($baseUrl.'/scripts/prefixfree.min.js');
	$cs->registerCssFile($baseUrl.'/css/stopwatch.css');
	$cs->registerCssFile($baseUrl.'/css/mainPage.css');
?>

<div class="timer">
	<input id="start" name="controls" type="radio"/>
	<input id="stop" name="controls" type="radio"/>
	<input id="reset" name="controls" type="radio"/>
	<div class="cell">
		<div class="numbers tenhours moveten">0 1 2 3 4 5 6 7 8 9</div>
	</div>
	<div class="cell">
		<div class="numbers hours moveten">0 1 2 3 4 5 6 7 8 9</div>
	</div>
	
	<div class="cell divider">
		<div class="numbers">:</div>
	</div>
	
	<div class="cell">
		<div class="numbers tenminutes movesix">0 1 2 3 4 5 6</div>
	</div>
	
	<div class="cell">
		<div class="numbers minutes moveten">0 1 2 3 4 5 6 7 8 9</div>
	</div>
	
	<div class="cell divider">
		<div class="numbers">:</div>
	</div>
	
	<div class="cell">
		<div class="numbers tenseconds movesix">0 1 2 3 4 5 6</div>
	</div>
	
	<div class="cell">
		<div class="numbers seconds moveten">0 1 2 3 4 5 6 7 8 9</div>
	</div>
	
	<div class="cell divider">
		<div class="numbers">:</div>
	</div>
	
	<div class="cell">
		<div class="numbers tenths moveten">0 1 2 3 4 5 6 7 8 9</div>
	</div>
	
	<div class="cell">
		<div class="numbers hundredths moveten">0 1 2 3 4 5 6 7 8 9</div>
	</div>
</div>

<div id="timer_controls">
	<label for="start">Start</label>
	<label for="stop">Stop</label>
	<label for="reset">Reset</label>
</div>

<br><br>

<div id="column1-container">
	<div id="column1">
		<table>
			<thead>
				<th>Cube Type</th>
				<th>Scramble</th>
				<th>Solve Time</th>
				<th>Goal</th>
				<th>Date/Time</th>
			</thead>
			
			<tbody>
				<?php
					foreach ($solutions as $solution) {
						echo "<tr>";
						
						//Output Cube Type
						switch($solution->cube_type) {
							case 0:
								echo "<td>2x2x2</td>";
								break;
							case 1:
								echo "<td>3x3x3</td>";
								break;
							case 2:
								echo "<td>4x4x4</td>";
								break;
							case 3:
								echo "<td>5x5x5</td>";
								break;
						}
												
						echo "<td>".$solution->scramble."</td>"; //Output scramble
						echo "<td>".$solution->solve_time."</td>"; //Output solve_time
						
						//Output Goal
						switch($solution->goal) {
							case 0:
								echo "<td>Speed</td>";
								break;
							case 1:
								echo "<td>Fewest Moves</td>";
								break;
							case 2:
								echo "<td>Single-Handed</td>";
								break;
							case 3:
								echo "<td>Blindfolded</td>";
								break;
						}
						
						echo "<td>".$solution->date."</td>"; //Output date
						
					}
				?>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div id="column2">
	<?php $this->renderPartial("/solution/_form", array('model' => new Solution)); ?>
</div>

<div id="clear"></div>