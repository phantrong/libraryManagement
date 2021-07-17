<?php

namespace App\Repositories\Book;

use App\Repositories\RepositoryInterface;

interface BookRepositoryInterface extends RepositoryInterface
{
    /**
     * getListBook
     *
     * @return object
     */
    public function getListBook();

    /**
     * getListCategory
     *
     * @return void
     */
    public function getListCategory();
}
