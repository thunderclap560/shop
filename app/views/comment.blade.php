<div class="comment row">
    <div class="col-sm-3 author">
        <div class="grade">
            <span>Đánh giá</span>
            <span class="reviewRating">
                <?php $j =  $data['rate'];?>
                @for($i=0;$i < $j;$i++ )
                    <i class="fa fa-star"></i>
                @endfor
            </span>
        </div>
        <div class="info-author">
            <span><strong>{{$data['uid']}}</strong></span>
            <em>Vừa xong</em>
        </div>
    </div>
    <div class="col-sm-9 commnet-dettail">
      {{$data['comment']}}
    </div>
</div>