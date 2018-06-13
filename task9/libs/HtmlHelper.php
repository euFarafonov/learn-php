<?php
class HtmlHelper
{
	static public function createElement($items, $opt)
	{
		$parentAttr = self::createAttr($opt['parentAttr']);
        $tagAttr = self::createAttr($opt['tagAttr']);
        $childAttr = self::createAttr($opt['childAttr']);
        $i = 1;
        
        $element = '<'.$opt['parent'].' '.$parentAttr.'>';
        
        if ('table' === $opt['parent'])
        {
            $element .= '<'.$opt['tag'].'><'.$opt['child'].'>#</'.$opt['child'].'>';
            
            foreach ($items[0] as $key => $val)
            {
                $element .= '<'.$opt['child'].'>'.$key.'</'.$opt['child'].'>';
            }
            
            $element .= '</'.$opt['tag'].'>';
        }
        
        foreach ($items as $val)
		{
            if ('select' === $opt['parent'])
            {
                $element .= '<'.$opt['tag'].$tagAttr.' value="'.strtolower($val['name']).'">';
                $element .= $val['name'];
                $element .= '</'.$opt['tag'].'>';
            }
            elseif ('table' === $opt['parent'])
            {
                $element .= '<'.$opt['tag'].$tagAttr.'>';
                $element .= '<'.$opt['child'].$childAttr.'>'.$i++.'</'.$opt['child'].'>';
                $element .= '<'.$opt['child'].$childAttr.'>'.$val['name'].'</'.$opt['child'].'>';
                $element .= '<'.$opt['child'].$childAttr.'>'.$val['description'].'</'.$opt['child'].'>';
                $element .= '</'.$opt['tag'].'>';
            }
            elseif ('dl' === $opt['parent'])
            {
                $element .= '<'.$opt['tag'].$tagAttr.'>'.$val['name'].'</'.$opt['tag'].'>';
                $element .= '<'.$opt['child'].$childAttr.'>'.$val['description'].'</'.$opt['child'].'>';
            }
            elseif ('input' === $opt['child'])
            {
                $element .= '<'.$opt['tag'].$tagAttr.'>';
                $element .= '<'.$opt['child'].$childAttr.' value="'.strtolower($val['name']).'">';
                $element .= $val['name'];
                $element .= '</'.$opt['tag'].'>';
            }
            else
            {
                $element .= '<'.$opt['tag'].$tagAttr.'>'.$val['name'].'</'.$opt['tag'].'>';
            }
		}
		$element .= '</'.$opt['parent'].'>';
		
		return $element;
	}
    
    static private function createAttr($arr)
    {
        $attr = '';
        
        foreach ($arr as $key => $val)
        {
            $attr .= ' '.$key.'='.$val;
        }
        
        return $attr;
    }
}
?>