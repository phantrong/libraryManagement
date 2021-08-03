<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\Book\BookRepository;
use App\Models\Book;

class AjaxController extends Controller
{
    private $bookRepository;
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }
    public function getDataAjax()
    {
        $data = DB::table('orderdetails')->select('book_id', DB::raw('sum(quantity) as total'), DB::raw('(select name from books where book_id = id) as nameBook'))
            ->groupBy('book_id')->orderByDesc('total')->limit(8)->get();
        return $data;
    }

    public function getTotalAjax(Request $request)
    {
        $value = $request->value;
        $type = $request->type;
        $index  = array_search($value, Book::TYPE);
        if ($type == "category") {
            return DB::table('books')->select(DB::raw('sum(price) as total'))->where($type, 'like', $index . '%')->get();
        }
        return DB::table('books')->select(DB::raw('sum(price) as total'))->where($type, $value)->get();
    }

    public function dashBoardOfMonth(Request $request)
    {
        $type = $request->type;
        if ($type == 'month')
            return   DB::table('orders')->select(DB::raw('CASE WHEN DAY(created_at) between 1 and 7 THEN 1
        WHEN DAY(created_at) between 8 and 15 THEN 2
        WHEN DAY(created_at) between 16 and 23 THEN 3
        ELSE 4
        END AS weeks'), DB::raw('count(id) as total'))->whereMonth('created_at', $request->month)->whereYear('created_at', $request->year)->groupBy('weeks')->get();

        else return DB::table('orders')->select(DB::raw('CASE WHEN Month(created_at) = 1  THEN 1
        WHEN Month(created_at) = 2  THEN 2
        WHEN Month(created_at) = 3  THEN 3
        WHEN Month(created_at) = 4  THEN 4
        WHEN Month(created_at) = 5  THEN 5
        WHEN Month(created_at) = 6  THEN 6
        WHEN Month(created_at) = 7  THEN 7
        WHEN Month(created_at) = 8  THEN 8
        WHEN Month(created_at) = 9  THEN 9
        WHEN Month(created_at) = 10  THEN 10
        WHEN Month(created_at) = 11  THEN 11
        ELSE 12
        END AS months'), DB::raw('count(id) as total'))->whereYear('created_at', $request->year)->groupBy('months')->get();
    }

    public function dashBoardFromTo(Request $request)
    {
        $type = $request->type;
        if ($type == 'month') {
            $datefrom = $request->valuefrom;
            $dateto = $request->valueto;
            return DB::table('orders')->selectRaw('count(*) as total, concat(year(created_at),"-",month(created_at)) as dates')
                ->whereBetween('created_at', [$datefrom, $dateto])
                ->groupBy('dates')
                ->get();
        } else {
            $datefrom = $request->valuefrom;
            $distance = $request->value;
            return DB::table('orders')->selectRaw('count(*) as total, concat(year(created_at),"-",month(created_at),"-",day(created_at)) as days')
                ->whereRaw('created_at between ? and adddate(?, interval ? day)', [$datefrom, $datefrom, $distance])
                ->groupBy('days')
                ->get();
        }
    }

    public function searchDataByAjax(Request $request)
    {
        $data = [];
        $valueRequest = $request->category;
        if ($valueRequest != 0) return  $this->bookRepository->searchDataAjax($valueRequest);
        else return  response()
            ->json([]);
    }
}
