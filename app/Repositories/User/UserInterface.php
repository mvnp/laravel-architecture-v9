<?php

namespace App\Repositories\User;

interface UserInterface {

    public function all();

    public function find($id);

    public function create($data);

    public function update($id, $data);

    public function destroy($id);
}
