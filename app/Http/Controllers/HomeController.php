<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Order::query();

        $startYear = Carbon::now()->startOfYear();
        $lists = $query->where('orders.created_at', '>=', $startYear)
            ->join('merchants', 'orders.merchant_id', 'merchants.id')
            ->select('merchants.id', 'merchants.name',
                DB::raw('sum(CASE Month(orders.created_at) WHEN 1 THEN amount ELSE 0 end) AS Jan'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 2 THEN amount ELSE 0 end) AS Feb'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 3 THEN amount ELSE 0 end) AS Mar'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 4 THEN amount ELSE 0 end) AS Apr'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 5 THEN amount ELSE 0 end) AS May'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 6 THEN amount ELSE 0 end) AS Jun'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 7 THEN amount ELSE 0 end) AS Jul'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 8 THEN amount ELSE 0 end) AS Aug'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 9 THEN amount ELSE 0 end) AS Sept'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 10 THEN amount ELSE 0 end) AS Oct'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 11 THEN amount ELSE 0 end) AS Nov'),
                DB::raw('sum(CASE Month(orders.created_at) WHEN 12 THEN amount ELSE 0 end) AS Dece'))
            ->groupBy('orders.merchant_id')->get();
        return $lists;
        return view('home');
    }
}
