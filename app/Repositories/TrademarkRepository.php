<?php

namespace App\Repositories;

use App\Models\Trademark;
use App\Repositories\BaseRepository;

/**
 * Class TrademarkRepository
 * @package App\Repositories
 * @version July 2, 2020, 1:22 am UTC
*/

class TrademarkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'trade_name',
        'active'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Trademark::class;
    }
}
