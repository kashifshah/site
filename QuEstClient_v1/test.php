<?php
/* Redirect browser */
header("Location: http://www.quest.dcs.shef.ac.uk/QuEstClient_v1/test.php");
 
/* Make sure that code below does not get executed when we redirect. */
exit;
?>

<?
	
	// Loads functions for adding the HTML wrapper
	include('includes/config.php');
	
	// Adds the header
	addHeader('Machine Translation');
	?>



<div>
    
    <h3>Get Translation and Prediction:</h3>
    
    Select a file to upload: <br />
    Please make sure that file contain a sentence per line and is in following format with tab as delimiter:<br />
    id &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp source sentence to be translated <br />
    e.g <br />
    1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp this is first sentence <br />
    2&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp this is second sentence <br />
    <form action="callQuEst.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" size="50" />
        <br />
        <input type="submit" value="Upload File and Translate" />
    </form>
    
    
    <h3>Get Ranking of multiple targets given same source:</h3>
    Format (tab separated):<br />
    e.g <br />
    1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp source-sentence &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp target1 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp target2 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp target3 <br />
    
    
    <form action="send_to_quest.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file2" size="50" />
        <br />
        <input type="submit" value="Upload File and Rank" />
    </form>
    
	
		


</div>


<? addFooter(); ?>