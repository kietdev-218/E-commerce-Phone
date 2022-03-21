<?php
class pager{

	function get_page(){
		$get_page ='';
		
		if(isset($_GET['page']) && $_GET['page'] !=''&&(int)$_GET['page'] == $_GET['page'] && is_numeric($_GET['page']))
		{
			if((int)$_GET['page'] != $_GET['page'])
				$get_page = (int)$_GET['page'];
			else
				$get_page = $_GET['page'];
		}
		else
		{
			$get_page =1;
		}
			
			return $get_page;
	}
	
	function count_pages($limit,$count){
		$count_pages = ceil($count/$limit);
		return $count_pages;
	}
	
	function findstart($get_page,$limit){
		return ($get_page-1)*$limit;
	}
	
	function query_string(){
		$query_string ='';
			
		if($_SERVER['QUERY_STRING'] != '')
		{
			$mang_tham_so = explode('&',$_SERVER['QUERY_STRING']);
			foreach($mang_tham_so as $tham_so)
			{
				$tach_tham_so = explode('=',$tham_so);
				if($tach_tham_so[0] != 'page')
				{
					$query_string .= $tham_so.'&';
				}

			}
		}
		return $query_string;
	}
	
	function query_string_trang_dau(){
		$query_string ='';
		$arr = array();
		if($_SERVER['QUERY_STRING'] != '')
		{
			$mang_tham_so = explode('&',$_SERVER['QUERY_STRING']);
			foreach($mang_tham_so as $tham_so)
			{
				$tach_tham_so = explode('=',$tham_so);
				if($tach_tham_so[0] != 'page')
				{
					$arr[] = $tham_so;
				}

			}
			if(count($arr)>0)
				$query_string = '?'.implode('&',$arr);
			
		}
		return $query_string;
	}
	
	function page_buttons($start,$end){
		$get_page = $this->get_page();
		$query_string = $this->query_string();
		$page_buttons = '';
		for($i = $start ; $i<=$end; $i++)
		{
			if($i == $get_page)
				{
					$page_buttons .= '<span id="page-active" class="page-button">'.$i.'</span>';
				}
				else
				{
					$page_buttons .= '<a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.$i.'"><span class="page-button">'.$i.'</span></a>';
				}
		}
		return $page_buttons;
	}
	
	function pages_list($count_pages,$get_page){
		$query_string = $this->query_string();
		$query_string_1 = $this->query_string_trang_dau();
		$pages_list = '';
		$page_buttons = '';
		if($count_pages <= 9)
		{
			$count_buttons = $count_pages;
		}
		else
		{
			$count_buttons = 9;
		}
		
		if($count_pages>1)
		{
			if($get_page>=1 && $get_page <= ceil($count_buttons/2))
			{
				$page_buttons = $this->page_buttons(1,$count_buttons);
				
				if($get_page !=1)
				{
					$pages_list .= '<a href="'.$_SERVER['PHP_SELF'].$query_string_1.'"><span class="page-button">Trang đầu</span></a><a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.($get_page-1).'"><span class="page-button"><</span></a>'.$page_buttons.'<a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.($get_page+1).'"><span class="page-button">></span></a><a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.$count_pages.'"><span class="page-button">Trang cuối</span></a>';
				}
				else
				{
					$pages_list .= $page_buttons.'<a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.($get_page+1).'"><span class="page-button">></span></a><a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.$count_pages.'"><span class="page-button">Trang cuối</span></a>';
				}
			}
			
			else if($get_page > ceil($count_buttons/2) && $get_page <= $count_pages - ceil($count_buttons/2))
			{
				$page_buttons = $this->page_buttons($get_page - floor($count_buttons/2),$get_page + floor($count_buttons/2));
				
				$pages_list .= '<a href="'.$_SERVER['PHP_SELF'].$query_string_1.'"><span class="page-button">Trang đầu</span></a><a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.($get_page-1).'"><span class="page-button"><</span></a>'.$page_buttons.'<a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.($get_page+1).'"><span class="page-button">></span></a><a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.$count_pages.'"><span class="page-button">Trang cuối</span></a>';
			}
			
			else if($get_page > $count_pages - ceil($count_buttons/2) && $get_page <= $count_pages)
			{
				$page_buttons = $this->page_buttons($count_pages - $count_buttons+1,$count_pages);
				
				if($get_page !=$count_pages)
				{
					$pages_list .= '<a href="'.$_SERVER['PHP_SELF'].$query_string_1.'"><span class="page-button">Trang đầu</span></a><a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.($get_page-1).'"><span class="page-button"><</span></a>'.$page_buttons.'<a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.($get_page+1).'"><span class="page-button">></span></a><a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.$count_pages.'"><span class="page-button">Trang cuối</span></a>';;
				}
				else
				{
					$pages_list .= '<a href="'.$_SERVER['PHP_SELF'].$query_string_1.'"><span class="page-button">Trang đầu</span></a><a href="'.$_SERVER['PHP_SELF'].'?'.$query_string.'page='.($get_page-1).'"><span class="page-button"><</span></a>'.$page_buttons;
				}
			}
	}
		return $pages_list;
	}
}
?>