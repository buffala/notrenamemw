<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require 'includes/header.php'; ?>

</head>

<body>
<div id="jqt">
    <div id="home">
        
        <div class="toolbar">
            <img src="imgs/gameDay.png" height="43" width="182" alt="Notre Dame GameDay" />
        </div>
        
        <div id="home_page">
            <ul class="individual">
            	<li class="arrow"><a href="#players">Game Day Player</a></li>
            </ul>
            <ul class="individual">
            	<li class="arrow"><a href="#players_statistics">Player Statistics</a></li>
            </ul>
            <ul class="individual">
            	<li class="arrow"><a href="#players_video">Video Clip</a></li>
            </ul>
            <ul class="individual">
            	<li class="arrow"><a href="http://www.dailymailpresorting.com">Lake Michigan Mailer</a></li>
            </ul>
        </div>
        
        <div id="home_content">
            <img src="imgs/fighting_irishman.png" width="143" height="127" alt="Fighting Irishman" class="fLeft" />
            <imG src="imgs/sponserBy.png" width="146" height="58" alt="Lake Michigan Mailers" class="lmm" />
        </div>    
	</div>
    
<?php require 'players.php'; ?>
<?php require 'player_details.php' ?>
    
</div>

</body>
</html>