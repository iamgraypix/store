<?php 

namespace App\Interfaces;

interface ItemsRepositoryInterface {

    public function get();

    public function find(int $id);

    public function create(array $fields);

    public function update(int $id, array $fields);

    public function delete(int $id);

}