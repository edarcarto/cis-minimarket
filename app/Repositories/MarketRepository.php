<?php

namespace App\Repositories;

use App\Models\Market;
use App\Repositories\BaseRepository;

class MarketRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'market_name',  
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
        return Market::class;
    }
}
