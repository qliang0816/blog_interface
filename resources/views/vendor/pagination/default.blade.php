@if ($paginator->hasPages())
    <ul class="am-pagination">
        <li class="am-pagination-prev"><a href="{{ $paginator->previousPageUrl() }}">&laquo; Prev</a></li>
        <li class="am-pagination-next"><a href="{{ $paginator->nextPageUrl() }}">Next &raquo;</a></li>
    </ul>
@endif
