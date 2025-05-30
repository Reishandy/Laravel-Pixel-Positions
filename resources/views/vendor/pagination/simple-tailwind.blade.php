@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray border border-white/10 cursor-default leading-5 rounded-xl bg-white/5">
                    {!! __('pagination.previous') !!}
                </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white border border-white/10 leading-5 rounded-xl bg-white/5 hover:border-main focus:outline-none focus:border-main transition-colors duration-300">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-white border border-white/10 leading-5 rounded-xl bg-white/5 hover:border-main focus:outline-none focus:border-main transition-colors duration-300">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray border border-white/10 cursor-default leading-5 rounded-xl bg-white/5">
                    {!! __('pagination.next') !!}
                </span>
        @endif
    </nav>
@endif
