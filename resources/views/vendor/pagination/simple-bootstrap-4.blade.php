@if ($paginator->hasPages())
    <div class="laypage-main">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"
               class="laypage-next">上一页</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="laypage-next" aria-label="@lang('pagination.next')">下一页</a>
        @endif
    </div>
@endif
