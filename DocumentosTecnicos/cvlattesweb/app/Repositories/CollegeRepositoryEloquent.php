<?php

namespace cvlattesweb\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use cvlattesweb\Repositories\CollegeRepository;
use cvlattesweb\Models\College;
use cvlattesweb\Validators\CollegeValidator;

/**
 * Class CollegeRepositoryEloquent
 * @package namespace cvlattesweb\Repositories;
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
