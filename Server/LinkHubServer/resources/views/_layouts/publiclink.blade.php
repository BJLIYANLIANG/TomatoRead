<a href="{{url('link').'/'.$link->id}}">
    <i class="info circle icon"></i>
</a>
<a class="publiclink" link_id="{{$link->id}}" href="{{$link->url}}" target="_blank">
    {{str_limit($link->name,30)}}
</a>
