<?php
class Model
{
	protected $templates = array();
    
    public function __construct()
	{
		$this->templates = array('%TITLE%'=>'CURL', '%SEARCH%'=>'');
        
        if (empty($this->templates))
        {
            throw new ModelException('Can not get templates for html.');
        }
	}
	
	public function getTemplates()
	{
		return $this->templates;
	}
	
	public function searchData($query)
	{
		$curl = $this->useCurl($query);
		$html = str_get_html($curl);
		
		if (!$html)
		{
			throw new GetHtmlException('Can not get html from cURL.');
		}
		
		$elements = $html->find('#center_col #search .bkWMgd .srg .g .rc .s .st');
		
		$result = '';
		
		foreach ($elements as $item)
		{
			$title = $item->parent()->parent()->parent()->first_child()->first_child();
			$href = $title->href;
			$titleText = $title->plaintext;
			$link = $item->prev_sibling()->first_child()->plaintext;
			$text = $item->plaintext;
			
			$result .= '<div class="result">';
			$result .= '<a class="result_title" href="'.$href.'">'.$titleText.'</a>';
			$result .= '<div class="result_link">'.$link.'</div>';
			$result .= '<div class="result_text">'.$text.'</div>';
			$result .= '</div>';
		}
		
		$this->templates['%SEARCH%'] = $result;
		return true;
	}
	
	public function useCurl($query)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_HEADER, true);
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, USERAGENT);
        curl_setopt($ch, CURLOPT_URL, ENGINE.urlencode($query));
		
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