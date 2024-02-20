@props([
    "text",
    'link-text',
    'classes',
    'href'
])
<p>{{$text}} <span class="{{$classes}}"><a href="{{$href}}" class="{{$classes}}">{{{$link-text}}}</a></span></p>
