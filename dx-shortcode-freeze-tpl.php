<?php

// define the URL that does the trick
$admin_submit_url = admin_url('admin.php?page=dx-shortcode-freezer&generate=go');

// if the link is clicked, generate what needs to be generated
if(isset($_GET['generate']) && $_GET['generate'] == 'go') {
	dx_freeze_shortcodes_now();	

	echo "<h3>Data has been regenerated. Check the consistence of your site. </h3>";
} else { ?>
<div style="text-align: center;">
<h4><strong>WARNING! THIS COULD BREAK YOUR OVERALL DATABASE STYLING OR FUNCTIONALITY, USE AT YOUR OWN RISK AND CREATE A DATABASE BACKUP BEFORE YOU CLICK THE GENERATE BUTTON!!!</strong></h4>

<h2> Initiate the shortcode regeneration: </h2>
	
&gt;&gt;&gt; <a href="<?php echo $admin_submit_url; ?>">Freeze Shortcodes!</a> &lt;&lt;&lt; 
</div>
<?php } ?>
