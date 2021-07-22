<?php

namespace App\Repositories\Order;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use Carbon\Carbon;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    protected $perPage = 20;

    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Order::class;
    }

    public function getListOrderByUser($userIds = [], $day_start = '2020-01-01', $day_end = '')
    {
        if (!$day_end) {
            $day_end = now();
        }
        if ($userIds) {
            return $this->model->whereIn('user_id', $userIds)
                ->where('time_borrow', '>=', $day_start)
                ->where('time_borrow', '<=', $day_end)
                ->orderBy('status')->paginate($this->perPage);
        }
        return $this->model->where('time_borrow', '>=', $day_start)
            ->where('time_borrow', '<=', $day_end)
            ->orderBy('status')->paginate($this->perPage);
    }

    public function changeStatusOver($order, $type = false)
    {
        if ($order->status == Order::STATUS_BORROWING && $order->time_promise_pay <= Carbon::now()->addHours(7)->toDateTimeString()) {
            $order->status = Order::STATUS_OVERDUE;
            $order->update();
        }
        if ($type) {
            $order->status = Order::STATUS_BORROWING;
            $order->update();
        }
        return $order;
    }
}
