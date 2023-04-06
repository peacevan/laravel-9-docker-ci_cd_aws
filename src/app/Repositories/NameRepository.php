<?php

namespace App\Repositories;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Name;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class NameRepository
{
    public function __construct()
    {
    }

    /**
     * @return LengthAwarePaginator
     */
    public static function index(): LengthAwarePaginator
    {
        return Name::paginate();
    }

    /**
     * @return Collection
     */
    public static function findActiveNames($columns = ['id','name']): Collection
    {
        return Name::active()
            ->get($columns);
    }

    /**
     * @return Name
     */
    public static function store($arrayName): Name
    {
        return Name::create($arrayName);
    }

    /**
     * @return bool
     */
    public static function update($arrayName, $name): bool
    {
        return $name->update($arrayName);
    }

    /**
     * @return bool
     */
    public static function destroy($name): bool
    {
        return $name->delete();
    }

}
