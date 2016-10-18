<?php

namespace CodeDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Models\City;
use CodeDelivery\Validators\ClientValidator;

/**
 * Class CityRepositoryEloquent
 * @package namespace CodeDelivery\Repositories;
 */
class CityRepositoryEloquent extends BaseRepository implements CityRepository
{
    public function lists($column = null, $key = null)
    {
        return $this->model->lists('city', 'id');
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return City::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
