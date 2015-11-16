
<li class="col-sm-3">
    <div class="product-img">
        <a href="#"><img src="{{URL::asset('public/upload/image'.$data->image)}}" alt="{{$data->name}}"></a>
    </div>
    <h5 class="product-name">
        <a href="#">{{$data->name}}</a>
    </h5>
    <div class="qty">
        <label>Quantity</label>
        <input type="text" class="form-control input input-sm">
    </div>
    <div class="priority">
        <label>Priority</label>
        <select class="form-control input iput-sm">
            <option>Medium</option>
        </select>
    </div>
    <div class="button-action">
        <button class="button button-sm">Save</button>
        <a href="#"><i class="fa fa-close"></i></a>
    </div>
</li>