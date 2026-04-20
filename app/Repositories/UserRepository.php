<?php

namespace App\Repositories;

use App\Interface\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Exception;

class UserRepository implements UserRepositoryInterface
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

    public function create(
        array $data
    ) {
        DB::beginTransaction();
        try {
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->save();
            DB::commit();

            return $user;
        } catch (\Exception $e) {
            DB::rollback();

            throw new Exception($e->getMessage());
        }
    }
}
