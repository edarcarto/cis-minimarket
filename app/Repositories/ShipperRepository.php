<?php

namespace App\Repositories;

use App\Models\Shipper;
use App\Repositories\BaseRepository;

/**
 * Class ShipperRepository
 * @package App\Repositories
 * @version July 17, 2020, 1:27 am UTC
*/

class ShipperRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'address',
        '[A[Bphone',
        'status'
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
        return Shipper::class;
    }
}
