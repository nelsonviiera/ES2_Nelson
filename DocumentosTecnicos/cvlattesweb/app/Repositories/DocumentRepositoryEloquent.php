<?php

namespace cvlattesweb\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use cvlattesweb\Repositories\DocumentRepository;
use cvlattesweb\Models\Document;
use cvlattesweb\Validators\DocumentValidator;

/**
 * Class DocumentRepositoryEloquent
 * @package namespace cvlattesweb\Repositories;
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
