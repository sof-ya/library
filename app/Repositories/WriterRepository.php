<?php

namespace App\Repositories;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Writer;
use App\Models\Book;

class WriterRepository{

    public function filterByWriter(?int $writer_id) : BelongsToMany|Collection
    {
        if($writer_id) {
            return Writer::find($writer_id)->books();
        }
    }
}
