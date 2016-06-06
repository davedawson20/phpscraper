<?php

	echo "Pacific Lake <br><br>";

    $regex = '<div class="name">([A-Z.a-z])\w+';
    $url = "http://www.pacificlake.com/entrepreneurs";	
	
	$file_string = file_get_contents($url);
	preg_match_all("/".$regex."/", $file_string, $matches, PREG_PATTERN_ORDER);
	
	for ($i = 0; $i <= count($matches[0]); $i++)
	{
		echo $matches[0][$i];
		echo "<br>\n\n";
	}
		
	$content = $contentInput.'<br><br>RegEx:&nbsp;'.$regex.'<br>Terms:&nbsp;'.$search_terms.'<br>URL:&nbsp;'.$url.'<br>';


		
		
	echo "Pacific Lake <br><br>DOM Parser<br><br>";

	$xml = $file_string;

	$dom = new DOMDocument();
	//DOMDocument throws warnings when the XML is invalid, we don't care.
	//Though in this case, the media: namespace would be ignored because it's not defined.
	@$dom->loadXML($xml);
	$document = $dom->documentElement;

	//Find the elements you want to remove
	$entre = $document->getElementsByTagName("entrepreneur-holder")->item(0);

	//Output the resulting XML.
	echo $entre;
	
	
	?>

