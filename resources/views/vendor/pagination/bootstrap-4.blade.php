@if ($paginator->hasPages())
<center>
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item icon disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link"> <img src="{{ asset('img/icons/arrow-left.svg') }}" alt="arrow-left"> </span>
            </li>
        @else
            <li class="page-item icon">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <img src="{{ asset('img/icons/arrow-left.svg') }}" alt="arrow-left">
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item icon">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    <img src="{{ asset('img/icons/arrow-right.svg') }}" alt="arrow-right">
                </a>
            </li>
        @else
            <li class="page-item disabled icon" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link"> <img src="{{ asset('img/icons/arrow-right.svg') }}" alt="arrow-right"> </span>
            </li>
        @endif
    </ul>
</center>
@endif
