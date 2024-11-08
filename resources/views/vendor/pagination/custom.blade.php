<style>
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
    }

    .pagination li {
        /* margin: 0 5px; */
    }

    .pagination li a,
    .pagination li span {
        padding: 8px 12px;
        border: 1px solid #ddd;
        color: #333;
        text-decoration: none;
    }

    .pagination li.active span {
        background-color: #06233FFF;
        color: white;
    }

    .pagination li.disabled span {
        color: #aaa;
    }
</style>
@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Tombol ke halaman sebelumnya --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>&laquo;</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Menampilkan tiga angka di sekitar halaman saat ini --}}
        @php
            $start = max($paginator->currentPage() - 1, 1);
            $end = min($paginator->currentPage() + 1, $paginator->lastPage());
        @endphp

        {{-- Menampilkan halaman pertama jika halaman aktif lebih dari 2 --}}
        @if ($start > 1)
            <li><a href="{{ $paginator->url(1) }}">1</a></li>
            @if ($start > 2)
                <li class="disabled"><span>...</span></li>
            @endif
        @endif

        {{-- Menampilkan halaman yang aktif dan dua halaman di sekitarnya --}}
        @for ($i = $start; $i <= $end; $i++)
            @if ($i == $paginator->currentPage())
                <li class="active"><span>{{ $i }}</span></li>
            @else
                <li><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
            @endif
        @endfor

        {{-- Menampilkan halaman terakhir jika halaman saat ini tidak di dekat akhir --}}
        @if ($end < $paginator->lastPage())
            @if ($end < $paginator->lastPage() - 1)
                <li class="disabled"><span>...</span></li>
            @endif
            <li><a href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
        @endif

        {{-- Tombol ke halaman berikutnya --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="disabled"><span>&raquo;</span></li>
        @endif
    </ul>
@endif
