<?php

	echo '<H1><a href="http://www.pacificlake.com/entrepreneurs">Pacific Lake</a></H1>';

    $regex = '<div class="name">(.+)<\/div>([\n\r\t]+)(.+)<div class="company">(.+)<\/div>';
    $url = 'http://www.pacificlake.com/entrepreneurs';	
	
	$file_string = file_get_contents($url);
	preg_match_all("/".$regex."/", $file_string, $matches, PREG_PATTERN_ORDER);
	
	$count = count($matches[0]);
	echo "Entrepreneurs: ".$count;

	echo "<h2>Entrepreneurs & Companies</h2>\n";
	for ($i = 0; $i < $count; $i++)
	{
		echo $matches[1][$i].', '.$matches[4][$i];
		echo '<br>';


	}
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	echo '<H1><a href="http://www.anacapapartners.com/site/global/anacapa/portfolio/index.gsp">Ana Capa Partners</a></H1>';
	
    $regex = '<div class="search(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)<img src="(.+?)images(.+?)anacapa-img(.+?)portfolio-logos(.+?)(.+)\.(.+?)"(.+)>([\n\r\t]+)(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)';
    $url = 'http://www.anacapapartners.com/site/global/anacapa/portfolio/index.gsp';	
	
	$file_string = file_get_contents($url);
	preg_match_all("/".$regex."/", $file_string, $matchesAnaCapa, PREG_PATTERN_ORDER);
	
	$count = count($matchesAnaCapa[0]);

	echo "<h2>Companies</h2>\n";
	echo "Search Funds: ".$count;
	echo "<br><br>";
	for ($i = 0; $i < $count; $i++)
	{
		echo $matchesAnaCapa[10][$i];
		echo "<br>";
	}		
	
	
	
		
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
		echo '<H1><a href="http://trilogy-search.com/search-funds/">Trilogy Equity</a></H1>';
		
		
    $regex = '<div class="fund(.+)href="(.+?)"(.+)alt="(.+)"(.+)\n';
    $url = 'http://trilogy-search.com/search-funds/';	
	
	$file_string = file_get_contents($url);
	preg_match_all("/".$regex."/", $file_string, $matchesTrilogy, PREG_PATTERN_ORDER);
	
	$count = count($matchesTrilogy[0]);

	echo "<h2>Companies</h2>\n";
	echo "Search Funds: ".$count;
	echo "<br><br>";
	for ($i = 0; $i < $count; $i++)
	{
		echo '<a href="'.$matchesTrilogy[2][$i].'">'.$matchesTrilogy[4][$i].'</a><br>';
	}			
	
		
		
		
		
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo '<H1><a href="http://www.searchfunds.net/approach.html">Search Funds .NET</a></H1>';

    $regex = '<a href="(.+)">(.+)<\/a>';
    $url = 'http://www.searchfunds.net/approach.html';	
	
	$file_string = file_get_contents($url);
	preg_match_all("/".$regex."/", $file_string, $matchesSearchNet, PREG_PATTERN_ORDER);
	
	$count = count($matchesSearchNet[0]);

	echo "<h2>Companies</h2>\n";
	$total = $count - 3;
	echo "Search Funds: ".$total;
	echo "<br><br>";
	for ($i = 1; $i < $count-2; $i++)
	{
		echo $matchesSearchNet[0][$i]."<br>";
	}			
		
		
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
		echo '<H1><a href="http://www.searchfund.org/">Search Funds .ORG</a></H1>';
	
	echo "Nothing is actually listed on this website";
	


	
	?>

