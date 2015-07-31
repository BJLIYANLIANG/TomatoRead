<div class="item linkpoint">
    <div class="content" >
        <i class="linkinfo linkshare send outline icon"
           link_id="{{$link->id}}"
           data-html="
           <div class='content' style='min-width: 300px;'>
               类型：{{$link->typeString()}}<br/>
               点击次数：{{$link->click_count}}<br/>
               最后点击时间：{{$link->last_click_time}}<br/>
               添加时间：{{$link->created_at}}<br/>
               标签：{{$link->tags}}
           </div>
           "></i>
        <span class="linkmore" style="display:none">
            <i class="edit icon linkedit" link_id="{{$link->id}}" ></i>
            <i class="share alternate icon linkshare" link_id="{{$link->id}}"></i>
        </span>
        <a class="userlink" link_id="{{$link->id}}" href="{{$link->url}}" target="_blank">
            {{ str_limit($link->name,30)}}
        </a>
    </div>
</div>
