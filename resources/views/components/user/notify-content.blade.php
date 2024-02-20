
@props([
    'userImg',
    'title',
    'fileImg',
    'fileName',
    'time'
])




<div class="notify-main">
    asdfasdfasdfasdsdfsdfsadf
    <div class="first d-flex">
        <div class="image pl-2">
            {{-- <img src="{{$userImg}}" alt="kc" > --}}
        </div>
        <div class="notify-title">
            <p class="px-2">{{$title}}</p>
            <div class="notify-file d-flex px-2">
                {{-- <img src="{{$fileImg}}" alt="kc" > --}}
                <p class="pl-2">{{$fileName}}</p>
            </div>
            <p class="notify-time">{{$time}}</p>
        </div>
    </div>
</div>
