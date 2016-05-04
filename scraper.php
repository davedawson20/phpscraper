<?php


$error_msg = "";

if (isset($_POST['regex'], $_POST['search_terms'], $_POST['url'], $_POST['content'])) {
    // Sanitize and validate the data passed in
    $regex = $_POST['regex'];
    $search_terms = filter_input(INPUT_POST, 'search_terms');
    $url = filter_input(INPUT_POST, 'url');
	$contentInput = filter_input(INPUT_POST, 'content');
	
	
	$file_string = file_get_contents($url);
	preg_match_all("/".$regex."/", $file_string, $matches, PREG_PATTERN_ORDER);
	
	for ($i = 0; $i <= count($matches[0]); $i++)
	{
		echo $matches[0][$i];
		echo "<br>\n\n";
	}
	//foreach($matches as $result){
	//	echo $result[0][0].'<br>';		
	//}
		
	$content = $contentInput.'<br><br>RegEx:&nbsp;'.$regex.'<br>Terms:&nbsp;'.$search_terms.'<br>URL:&nbsp;'.$url.'<br>';
	
	
	
	
		
    
}else{
	$content = "";
}


?>







<form method="post" name="registration_form" action="<?php echo "scraper.php"; ?>">
	<div class="form-group">
		<input type="text" name='regex' id='regex' class="form-control" value="<a([^>]+)>(.+?)<.a>"><br>
		<input type="text"  name='search_terms' id='search_terms' class="form-control" value="Market Research, Microsoft"><br>
		<input type="text"  name='url' id='url' class="form-control" value="https://www.microsoft.com/en-us/search/GeneralInfoDrillInResults.aspx?q=market+research">
	</div>

	<input type="hidden" name='content' id='content' class="form-control" value="<?php echo $content; ?>"><br>
	<input type="submit" class="form-control"  value="Submit" ><br>
	
	
</form>
<div>
Examples of Regex:
</div>
<div>
Pull out all Links: <code>&lt;a([^>]+)>(.+?)<\/a></code>
</div>


<?php
	if (isset($_POST['regex'], $_POST['search_terms'], $_POST['url'], $_POST['content'])) {
		echo $content;
	}
?>