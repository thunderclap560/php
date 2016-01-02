<?php
class Pager
{
    function findStart($limit)
    {   
        
        if((!isset($_GET['page'])) || ($_GET['page'] == "1") || !is_numeric($_GET['page']) ) 
        {
            $start = 0;
            $_GET['page'] = 1; /*trang đầu tiên */
        }
        else
        {
            
            $start = ($_GET['page']-1)*$limit;
        }
        return $start;
        
    }
    
    
    function findPages($count, $limit)
    {
        $pages = (($count % $limit) == 0)? $count / $limit:
        ceil($count / $limit); 
        return $pages;
    }
    
    function pagesList($curpage, $pages)
    {
        $page_list = "";

         
        if(($curpage != 1) && ($curpage))
        {
            $page_list .= "<a href='".$_SERVER['REQUEST_URI']."&page=1'><span class ='border_text'>First</span></a>"." &nbsp;";
        }
        
        if(($curpage-1) > 0)
        {
            $page_list .= "<a href='".$_SERVER['REQUEST_URI']."&page=".($curpage-1)."'><span class ='border_text'>Prev</span></a>"." &nbsp;";
        }
        
       
        for ($i=1; $i<=$pages; $i++)
        {
            if ($i == $curpage)
            {
                $page_list .= "<span class ='border_text_active'>".$i."</span>&nbsp;";
            }
            else
            {
                $page_list .= "<a href='".$_SERVER['REQUEST_URI']. "&page=".$i."' ><span class ='border_text'>".$i."</span></a>&nbsp;";
            }
            $page_list .=" ";
        }
        
       
        
        
        if (($curpage+1) <= $pages)
        {
            $page_list .= "<a href='".$_SERVER['REQUEST_URI']."&page=".($curpage+1)."'><span class ='border_text'>Next</span></a> &nbsp;";
        }
        
            if (($curpage != $pages) && ($pages != 0) )
        {
            $page_list .= "<a href=\"".$_SERVER['REQUEST_URI']."&page=".$pages."\"><span class ='border_text'>Last</span></a>";
        }
    
        $page_list .= "\n";
           
        return $page_list;
    }
    
}  
?>