<?php
$words = new MOD_words();
?>

           <h3><?php echo $words->getFormatted('Actions'); ?></h3>
           <ul class="linklist">
	        <li class="icon fam_commentadd"><a href="forums/new"><?php echo $words->getBuffered('ForumNewTopic'); ?></a><?php echo $words->flushBuffer(); ?></li>
	        <li><a href="forums/rules"><?php echo $words->get('ForumRulesShort'); ?></a></li>
	        <li><a href="forums/subscriptions"><?php echo $words->get('forum_YourSubscription'); ?></a></li>
           </ul>

