<?php
$User = APP_User::login();
$words = new MOD_words();
$search = '';
if (isset($_GET['s']) && $_GET['s'])
    $search = $_GET['s'];
?>

<div id="teaser" class="clearfix">
	<div class="subcolumns">
    	<div class="c50l">
			<div class="subr">
    			<h1><a href="trip"><?php echo $words->getFormatted('tripsTitle'); ?></a></h1>
        	</div>
    	</div> 
    	<div class="c50r" > 
        	<div class="subc">
            	<div id="searchteaser" >
                <form method="get" action="trip/search">
                    <input type="text" name="s" value="<?=$search?>" />
                    <input class="button" type="submit" name="submit" value="<?php echo $words->getFormatted('TripsSearch'); ?>" />
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
