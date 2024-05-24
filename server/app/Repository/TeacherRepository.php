<?php

namespace App\Repository;

use App\Domain\Criteria\Criteria;
use App\Eloquent\EloquentQuery;
use App\Models\Teacher;

final class TeacherRepository
{
    public function getRecords(Criteria $criteria)
    {
        $query = EloquentQuery::queryConverter(new Teacher(), Teacher::with('course'), $criteria);

        $results = $query->get();
        $total = Teacher::count();
        return [
            "rows" => $results->toArray(),
            "count" => $total,
        ];
    }
}