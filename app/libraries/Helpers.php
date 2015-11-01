<?php 
/* datpt */
class Helpers{
	
	public static function recusive($data){
			echo '<ul class="timeline">';
			foreach($data as $k => $v){
				echo '<li><i class="fa fa-user bg-aqua"></i>';
				echo '<div class="timeline-item">';
			    echo '<h3 class="timeline-header"><a href="#">'.$v->users->lastname.'</a> <em>đã trả lời</em></h3>';    
			    echo '<div class="timeline-body">'.$v->content.' </div>';
			    if(count($v->allReplies ) != 0){					
							Helpers::recusive($v->allReplies);									
				}			   
			    echo '</div></li>';
					
		}
		echo '</ul>';
		return TRUE;
	}

}
?>