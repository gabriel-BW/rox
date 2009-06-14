<?php

$member = $this->member;

$lang = $this->model->get_profile_language();
$profile_language = $lang->id;
$profile_language_code = $lang->ShortCode;

$words = $this->getWords();
$ww = $this->ww;
$wwsilent = $this->wwsilent;
$comments_count = $member->count_comments(); 

$layoutbits = new MOD_layoutbits;
$right = new MOD_right();

$verification_status = $member->verification_status;
if ($verification_status) $verification_text = $words->getSilent('verifymembers_'.$verification_status);

?>
