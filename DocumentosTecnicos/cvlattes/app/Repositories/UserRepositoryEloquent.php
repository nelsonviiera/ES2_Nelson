<?php

namespace cvlattes\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use cvlattes\Repositories\UserRepository;
use cvlattes\Models\User;
use cvlattes\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace cvlattes\Repositories;
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
