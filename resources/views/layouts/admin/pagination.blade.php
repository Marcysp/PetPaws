<div class="flex justify-center mt-4">
    @if ($paginator->onFirstPage())
        <span class="px-2 py-1 text-gray-400 bg-gray-100 rounded-md">Prev</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="px-2 py-1 text-blue-500 bg-gray-100 rounded-md hover:text-blue-700">Prev</a>
    @endif

    <span class="px-2 py-1 bg-gray-100 rounded-md">
        Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}
    </span>

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="px-2 py-1 text-blue-500 bg-gray-100 rounded-md hover:text-blue-700">Next</a>
    @else
        <span class="px-2 py-1 text-gray-400 bg-gray-100 rounded-md">Next</span>
    @endif
</div>
