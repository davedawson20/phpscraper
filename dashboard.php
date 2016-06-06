<?php

	echo "<H1>Pacific Lake</H1>";

    $regex = '<div class="name">(.+?)<\/div>';
    $regex2 = '<div class="company">(.+?)<\/div>';
    $url = 'http://www.pacificlake.com/entrepreneurs';	
	
	$file_string = file_get_contents($url);
	preg_match_all("/".$regex."/", $file_string, $matches, PREG_PATTERN_ORDER);
	preg_match_all("/".$regex2."/", $file_string, $matches2, PREG_PATTERN_ORDER);
	
	$count = count($matches[0]);
	echo "Entrepreneurs: ".$count;
	$count2 = count($matches2[0]);
	echo " Companies: ".$count2;

	echo "<h2>Entrepreneurs & Companies</h2>\n";
	for ($i = 0; $i < $count; $i++)
	{
		echo $matches[0][$i];
		echo $matches2[0][$i];
		echo '<br>';


	}
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	echo "<H1>Ana Capa Partners</H1>";
	
    $regex = '<div class="search(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)<img src="(.+)">([\n\r\t]+)(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)([\n\r\t]+)(.+)';
    $url = 'http://www.anacapapartners.com/site/global/anacapa/portfolio/index.gsp';	
	
	$file_string = file_get_contents($url);
	preg_match_all("/".$regex."/", $file_string, $matchesAnaCapa, PREG_PATTERN_ORDER);
	
	$count = count($matchesAnaCapa[0]);

	echo "<h2>Companies</h2>\n";
	echo "Search Funds: ".$count;
	echo "<br><br>";
	for ($i = 0; $i < $count; $i++)
	{
		echo '<img width="200" src="http://www.anacapapartners.com/'.$matchesAnaCapa[6][$i].'">';
		echo "<br>";
		echo $matchesAnaCapa[12][$i];
		echo "<br>";
		echo $matchesAnaCapa[16][$i];
		echo '<br>';
	}		
	
	
	
		
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
		echo "<H1>Trilogy Equity</H1>";
		
		
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
	echo "<H1>Search Funds .NET</H1>";

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
		echo "<H1>Search Funds .ORG</H1>";

	echo "Nothing is actually listed on this website";
	


	
	?>

