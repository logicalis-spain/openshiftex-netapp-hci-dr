<?php
  # Start PHP Session to keep track of whether or not load is getting generated
  session_start();
  
  echo "<meta http-equiv=\"refresh\" content=\"5,URL=/load2.php\" />";


    exec('pkill dd');
    echo "Stopping CPU Load! (auto refresh in 5 seconds)";
?>
