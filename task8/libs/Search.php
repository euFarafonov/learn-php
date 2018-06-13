<?php

class Search
{
    public function query($query)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_HEADER, true);
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, UA);
        curl_setopt($ch, CURLOPT_URL, curl_escape($ch, ENGINE.$query));
		
		$output = curl_exec($ch); 
		$info = curl_getinfo($ch);
		curl_close($ch);  
		
		if (200 !== $info['http_code'] && CONTENT_TYPE !== $info['content_type'])
		{
			throw new SearchException(HTTP_STATUS_ERROR.' '.$info['http_code'].' '.$info['http_code']);
		}
		
		return $output;
    }
}
?>