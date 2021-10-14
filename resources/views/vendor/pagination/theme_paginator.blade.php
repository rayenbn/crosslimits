@if ($paginator->hasPages())
<ol>
    {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li>
            <a title="Previous" class="previous i-previous">
                <i class="fa fa-angle-left"></i>
            </a>
        </li>
    @else
        <li>
            <a title="Previous" href="{{ $paginator->previousPageUrl() }}" class="previous i-previous">
                <i class="fa fa-angle-left"></i>
            </a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li><a class="disabled" aria-disabled="true">{{ $element }}</a></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="current" aria-current="page"><a>{{ $page }}</a></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
       
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li>
            <a title="Next" href="{{ $paginator->nextPageUrl() }}" class="next i-next">
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    @else
        <li>
        <a title="Next" class="next i-next disabled">
            <i class="fa fa-angle-right"></i>
        </a>
    </li>
    @endif
</ol>

   {{-- <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true"><i class="flaticon-left-arrow-sign"></i> Previous</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="flaticon-left-arrow-sign"></i> Previous</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next <i class="flaticon-right-direction"></i></a>
            </li>
        @else
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">Next <i class="flaticon-right-direction"></i></span>
            </li>
        @endif
    </ul>
    --}}
@endif
