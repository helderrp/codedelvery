<?php

namespace CodeDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Models\State;
use CodeDelivery\Validators\ClientValidator;

/**
 * Class StateRepositoryEloquent
 * @package namespace CodeDelivery\Repositories;
 */
class StateRepositoryEloquent extends BaseRepository implements StateRepository
{

    public function lists($column = null, $key = null)
    {
        return $this->model->lists('state', 'id');
    }


    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return State::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
