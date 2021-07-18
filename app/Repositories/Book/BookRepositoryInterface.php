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
     * getTextCategory
     *
     * @param  int $int
     * @return string
     */
    public function getTextCategory($int);
}
