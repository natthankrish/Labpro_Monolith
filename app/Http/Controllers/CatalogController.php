<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;

use function PHPSTORM_META\map;

class CatalogController extends Controller
{
    public function index(Request $req) {
        $api_base_url = 'http://localhost:3000';
        $query = $req->input('q');

        $res = Http::get($api_base_url . '/barang',[
            'q' => $query,
        ]);

        if ($res->successful()) {
            $data = $res->json();
            $data = collect($data['data']);
        }

        $currentPage = Paginator::resolveCurrentPage('page');

        $catalog = new LengthAwarePaginator(
            $data->forPage($currentPage, 5),
            $data->count(),
            5,
            $currentPage,
            [
                'path' => Paginator::resolveCurrentPath()
            ]
        );

        return view('catalog', compact('catalog'));
    }

    public function detail(Request $req) {
        $api_base_url = 'http://localhost:3000';
        $param = $req->url();

        $res = Http::get($api_base_url . '/barang/' . basename($param));

        $data = null;
        if ($res->successful()) {
            $data = $res->json();
            $data = collect($data['data']);
        }
        return view('detail', [
            "item" => $data,
        ]);
    }
}
