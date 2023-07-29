@extends('layout.main')

@section('container')
    <div class="container text-center">
        {{-- <p>{{ implode(" ", $data); }}</p> --}}
        @foreach ($catalog as $item)
        <div class="card w-30 mt-5">
            <div class="card-body">
              <h5 class="card-title">{{ $item["nama"] }}</h5>
              <p class="card-text">Rp. {{ $item["harga"] }}</p>
              <a href="{{ route('detail', ['id' => $item['id']]) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach

        <div class="row mt-5">
            <div class="col d-flex justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item{{ $catalog->onFirstPage() ? ' disabled' : '' }}">
                            <a class="page-link" href="{{ $catalog->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        @php
                            $currentPage = $catalog->currentPage();
                            $lastPage = $catalog->lastPage();
                            $maxPages = 5;
                            $halfMaxPages = floor($maxPages / 2);
                            $startPage = max($currentPage - $halfMaxPages, 1);
                            $endPage = min($currentPage + $halfMaxPages, $lastPage);
                            $ellipsisStart = ($startPage > 1);
                            $ellipsisEnd = ($endPage < $lastPage);
                        @endphp

                        @if ($ellipsisStart)
                            <li class="page-item disabled"><span class="page-link">...</span></li>
                        @endif

                        @for ($i = $startPage; $i <= $endPage; $i++)
                            <li class="page-item{{ $i === $currentPage ? ' active' : '' }}"><a class="page-link" href="{{ $catalog->url($i) }}">{{ $i }}</a></li>
                        @endfor

                        @if ($ellipsisEnd)
                            <li class="page-item disabled"><span class="page-link">...</span></li>
                        @endif

                        <li class="page-item{{ $catalog->hasMorePages() ? '' : ' disabled' }}">
                            <a class="page-link" href="{{ $catalog->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection