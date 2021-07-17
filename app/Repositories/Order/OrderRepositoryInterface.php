<?php

namespace App\Repositories\Order;

use App\Repositories\RepositoryInterface;

interface OrderRepositoryInterface extends RepositoryInterface
{
    /**
     * getModel
     *
     * @return void
     */
    public function getModel();

    /**
     * getListOrderByStatus
     *
     * @return object
     */
    public function getListOrderByStatus($status);
}
