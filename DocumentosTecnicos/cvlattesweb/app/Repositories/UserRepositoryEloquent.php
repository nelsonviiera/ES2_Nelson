<?php

namespace cvlattesweb\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use cvlattesweb\Repositories\UserRepository;
use cvlattesweb\Models\User;
use cvlattesweb\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace cvlattesweb\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
