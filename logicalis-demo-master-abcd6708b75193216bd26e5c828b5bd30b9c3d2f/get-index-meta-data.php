<?php

  echo "<table class='table table-bordered'>";
  echo "<tr><th>Meta-Data</th><th>Value</th></tr>";

  #The URL root is the AWS meta data service URL where metadata
  # requests regarding the running instance can be made
  $urlRoot="http://169.254.169.254/latest/meta-data/";
  # Get the instance ID from meta-data and print to the screen
  echo "<tr><td>Hostname</td><td><i>" .  gethostname() . "</i></td><tr>";

  # Availability Zonae
  echo "<tr><td> Local IP</td><td><i>" . getHostByName(getHostName())  . "</i></td><tr>";

  echo "</table>";

?>
