<div id="posts">		<?php 				$con = mysql_connect("localhost","root","root");		if (!$con) {		  die('Could not connect: ' . mysql_error());		}		mysql_select_db("website", $con);		$displayPosts=mysql_query("SELECT * FROM author a INNER JOIN post p		   ON a.id = p.id ORDER BY (time) DESC")		or die(mysql_error());  				while($row = mysql_fetch_array( $displayPosts )) {			// Print out the contents of each row into a table			echo '<h2>', $row['title'], '</h2>';			echo '<h3>', 'by ', $row['firstname'], ' ', $row['surname'], ' at ', $row['time'],'</h3>';			echo '<p>',  $row['content'], '</p>';		}		mysql_close($con)						?></div>