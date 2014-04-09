<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<script src="scripts/prefixfree.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/stopwatch.css">


<input id="start" name="controls" type="radio"/>
<input id="stop" name="controls" type="radio"/>
<input id="reset" name="controls" type="radio"/>

<div class="timer">
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

<div class="stuff">



</div>
