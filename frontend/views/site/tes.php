<?php

use \stmswitcher\flipclock\FlipClock;

$this->title = 'clock';
?>

<h1>ini custom clock</h1>

<div class="col-md-6">
	
</div>
<div class="col-md-3">
	
</div>
<div class="col-md-3">
	<?php

	echo FlipClock::widget([
	    'options'     => [
	        'language'  => 'id',
	        'clockFace' => 'TwentyFourHourClock'
	    ]
	]);

	?>	
</div>
