<?php

namespace cvlattes\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use cvlattes\Repositories\CollegeRepository;
use cvlattes\Models\College;
use cvlattes\Validators\CollegeValidator;

/**
 * Class CollegeRepositoryEloquent
 * @package namespace cvlattes\Repositories;
 */
class CollegeRepositoryEloquent extends BaseRepository implements CollegeRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return College::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
