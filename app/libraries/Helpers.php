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

	public static function comment($data){
		foreach($data as $k => $v){
			echo '<div class="comment row">';
            echo '<div class="col-sm-3 author">';
            if($v->user_id == 1){
            echo '<span style="top:5px;right:10px" class="notify notify-right notify-cart">Admin</span>';                               
            }else{
            echo '<span style="top:5px;right:10px" class="notify notify-right notify-cart">Reply</span>';                               
            }
            echo '</div>';
            echo '<div class="col-sm-9 commnet-dettail">';
            echo  $v->content;                               
            echo '</div></div>';                                        
			if(count($v->allReplies ) != 0){
				Helpers::comment($v->allReplies);	
			}
		}
		return TRUE;
	}

}
?>