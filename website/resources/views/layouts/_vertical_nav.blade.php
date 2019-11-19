<div class="no-touch">
    <nav id="cd-vertical-nav">
        <ul>
            @for($i=0; $i < count($sections_id); $i++)
            <li>
                <a href="#{{$sections_id[$i]}}" data-number="{{($i+1)}}">
                    <span class="cd-dot"></span>
                </a>
            </li>
            @endfor
        </ul>
    </nav>
    <a class="cd-nav-trigger cd-img-replace">Open navigation<span></span></a>
</div>