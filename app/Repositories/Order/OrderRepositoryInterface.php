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
     * getListOrderByUser
     *
     * @return object
     */
    public function getListOrderByUser($userIds);


    /**
     * changeStatusOver
     *
     * @param  object $order
     * @param  bool $type
     * @return object
     */
    public function changeStatusOver($order, $type);
}
