<?php

namespace App\Repositories;

use App\Models\UserType;
use App\Repositories\BaseRepository;

/**
 * Class UserTypeRepository
 * @package App\Repositories
 * @version July 20, 2020, 5:35 pm UTC
*/

class UserTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type_name',
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
        return UserType::class;
    }
}
