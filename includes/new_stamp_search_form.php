<!-- Copyright (c) 2010-2012 Katherine Erickson -->

<form method="GET" action="/GIlibrary/new_stamp.php">
	add new stamp record:&nbsp;
	<input type="text" name="search_term" value="<?php echo mysql_real_escape_string($_GET['search_term']); ?>"></input>
	<input type="submit" value="Find Template"></input>
	<br><span style="color: #666; font-size: 13px;">("V-4-B1" or "5" for Vidal 5)</span>
</form>