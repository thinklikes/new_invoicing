<?php

namespace App\Repositories;

use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;

/**
 * Class ItemTypeRepository
 * @package App\Repositories
 */
class ItemTypeRepository extends Repository
{

    /**
     * @return string
     */
    public function model()
    {
        return 'App\ItemType';
    }
}