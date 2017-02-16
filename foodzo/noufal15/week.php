<html>
<body>

<?php
$monday = strtotime("next monday");
$monday = date('W', $monday)==date('W') ? $monday-7*86400 : $monday;
 
$sunday = strtotime(date("Y-m-d",$monday)." +6 days");
$this_week_sd = date("Y-m-d",$monday);
$this_week_ed = date("Y-m-d",$sunday);
 
echo "Next week range from $this_week_sd to $this_week_ed ";
?>
</body>
</html>