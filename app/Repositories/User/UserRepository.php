<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository implements UserInterface {

    public $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function all()
    {
        return $this->user->all();
    }

    public function find($id)
    {
        return $this->user->find($id);
    }

    public function create($data)
    {
        return $this->user->create($data);
    }

    public function update($id, $data)
    {
        return $this->user->update($data);
    }

    public function destroy($id)
    {
        return $this->user->delelte();
    }
}
