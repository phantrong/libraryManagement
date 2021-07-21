<?php

namespace App\Repositories\Order;

use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    protected $perPage = 20;

    //lấy model tương ứng
    public function getModel()
    {
        return \App\Models\Order::class;
    }

    public function getListOrderByStatus($status = '')
    {
        if ($status) {
            return $this->model->where('status', $status)->paginate($this->perPage);
        }
        return $this->model->paginate($this->perPage);
    }
}
