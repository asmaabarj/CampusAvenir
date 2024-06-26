<?php


namespace App\Interfaces;

interface FaqInterface
{
    public function all();
    public function admin();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id);
}
