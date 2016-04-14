<?php

function getZone($search, $html)
{
	if ($html->find($search))
	{
		return trim($html->find($search, 0)->plaintext);
	}
	else
	{
		return "";
	}
	
}

?>