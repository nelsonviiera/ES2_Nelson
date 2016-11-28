<?php

namespace cvlattes\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use cvlattes\Repositories\DocumentRepository;
use cvlattes\Models\Document;
use cvlattes\Validators\DocumentValidator;

/**
 * Class DocumentRepositoryEloquent
 * @package namespace cvlattes\Repositories;
 */
class DocumentRepositoryEloquent extends BaseRepository implements DocumentRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Document::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
