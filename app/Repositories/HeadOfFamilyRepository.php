<?php

namespace App\Repositories;

use App\Interface\HeadOfFamilyRepositoryInterface;

class HeadOfFamilyRepository implements HeadOfFamilyRepositoryInterface
{
    public function getAll(
        ?string $search,
        ?int $limit,
        ?bool $execute
    ) {
        $query = User::where(function ($query) use ($search) {
            //jika ada parameter search dia akan melakukan search, yang telah di definisikan pada model user
            if ($search) {
                $query->search($search);
            }
        });

        if ($limit) {
            // mengambil beberapa data sesuai dengan limit yang diberikan
            $query->take($limit);
        }

        if ($execute) {
            return $query->get();
        }
        return $query;
    }

    public function getAllPaginated(
        ?string $search,
        ?int $rowPerPage
    ) {
        $query =$this->getAll(
            $search,
            null,
            false
        );
        return $query->paginate($rowPerPage ?? 10);
    }
}
