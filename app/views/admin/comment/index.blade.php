

<div class="content-wrapper">
<section class="content">
<div class="row">
	<div class="col-md-12">
		 <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ $title }}</h3>
                </div><!-- /.box-header -->
              <!-- The time line -->
             <div class="content">
              <ul class="timeline rm-text">
               <?php foreach($data as $k => $v){?>
                <li class="time-label">
                  <span class="bg-red">
                   {{ $v->name }}
                  </span>
                </li>
                {{ Helpers::recusive($v->comment)}}
                 <?php }?>
              </ul>
      </div>
</div>
</div>
</div>
</section>
</div>