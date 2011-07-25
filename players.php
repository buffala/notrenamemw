

<!-- players --> 
<div id="players">
    	<div class="toolbar">
            <img src="imgs/gameDay.png" height="43" width="182" alt="Notre Dame GameDay" />
            <a class="button back" href="#">Back</a>
        </div>
        
        <div id=""><h2>Game Day Player</div>

</div>

<!-- players statistics -->
<div id="players_statistics">
    	<div class="toolbar">
            <img src="imgs/gameDay.png" height="43" width="182" alt="Notre Dame GameDay" />
            <a class="button back" href="#">Back</a>
        </div>
        
        <div id=""><h2>Player Statistics</div>
</div>

<!-- player video -->
<div id="players_video">
    	<div class="toolbar">
            <img src="imgs/gameDay.png" height="43" width="182" alt="Notre Dame GameDay" />
            <a class="button back" href="#">Back</a>
        </div>
      
        <div id=""><h2>Video Clip</div>
</div>




<div id="roster">
	<div class="toolbar">
    	<h1>Notre Dame | Roster</h1>
        <a class="button back" href="#">back</a>
    </div>
    
    <ul class="edgetoedge">
            	<li class="arrow"><a href="#players">Player</a></li>
                <li class="arrow"><a href="#players">Player</a></li>
                <li class="arrow"><a href="#players">Player</a></li>
                <li class="arrow"><a href="#players">Player</a></li>
            </ul> 
</div>

<div id="misc_code">
<?php for ($i=0; $i<=10; $i++){?>
            <li class="arrow">
            	<div class="player_img">
            		<img src="imgs/person.png" width="40" height="40" alt="person pic" align="left" />
            	</div>
            
            	<div>
            		<a class="player_link" href="#player_details">Player <?php echo $i ?></a>
                </div>
            </li>		
  		<?php	} ?>
</div>