<ul class="styled-pagination">
    <li><a href="{{ $paginator->previousPageUrl() }}" class="arrow"><span class="flaticon-left"></span></a></li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li><a href="{{ $paginator->url($i) }}"
                class="{{ $paginator->currentPage() == $i ? 'active' : '' }}">{{ $i }}</a></li>
    @endfor
    <li><a href="{{ $paginator->nextPageUrl() }}" class="arrow"><span class="flaticon-right"></span></a></li>
</ul>
