<?php

namespace App\Interfaces;

interface ContactInterface
{
    public function all();
    public function admin();
    public function create(array $data);
    public function delete($id);
    public function find($id);
}
