<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class FrontendFilterController extends Controller
{
    public function filter_product(Request $request)
    {
        $cat = $request->catagory;
        $brand = $request->brand;

        $query = "SELECT * FROM products WHERE status = 1 ";

        if (empty($cat) &&  empty($brand)  ) {
            $query_exe = DB::select($query);
        }

        if (isset($cat)) {
            $CAT_filter = implode("','", $cat);
            $query .= "AND top_cat_id IN('" . $CAT_filter . "')   ";
            $query_exe = DB::select($query);
        }

        if (isset($brand)) {
            $BRAND_filter = implode("','", $brand);
            $query .= "AND brand_id IN('" . $BRAND_filter . "')   ";
            $query_exe = DB::select($query);
        }

        $products = $this->arrayPaginator($query_exe, $request);
        return response()->json([
            'notices' => $products,
            'view' => View::make('frontend.include.allproduct', compact('products'))->render(),
            'pagination' => (string)$products->links()
        ]);
    }



    public function filter_product_get(Request $request)
    {
        $cat = $request->catagory;
        $brand = $request->brand;

        $query = "SELECT * FROM products WHERE status = 1 ";

        if (empty($cat) &&  empty($brand)  ) {
            $query_exe = DB::select($query);
        }

        if (isset($cat)) {
            $CAT_filter = implode("','", $cat);
            $query .= "AND top_cat_id IN('" . $CAT_filter . "')   ";
            $query_exe = DB::select($query);
        }

        if (isset($brand)) {
            $BRAND_filter = implode("','", $brand);
            $query .= "AND brand_id IN('" . $BRAND_filter . "')   ";
            $query_exe = DB::select($query);
        }

        $products = $this->arrayPaginator($query_exe, $request);
        return response()->json([
            'notices' => $products,
            'view' => View::make('frontend.include.allproduct', compact('products'))->render(),
            'pagination' => (string)$products->links()
        ]);
    }


    public function arrayPaginator($array, $request)
    {
        $page = $request->input('page', 1);
        $perPage = 15;
        $offset = ($page * $perPage) - $perPage;
        return new LengthAwarePaginator(array_slice($array, $offset, $perPage, true), count($array), $perPage, $page,
            ['path' => $request->url(), 'query' => $request->query()]);
    }

}
