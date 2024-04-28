<?php

namespace App\Services;

use App\Interfaces\ContactInterface;

class ContactService
{
    protected $contactRepository;

    public function __construct(ContactInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function all()
    {
        return $this->contactRepository->all();
    }

    public function create(array $data)
    {
        return $this->contactRepository->create($data);
    }

    public function delete($id)
    {
        return $this->contactRepository->delete($id);
    }

    public function find($id)
    {
        return $this->contactRepository->find($id);
    }
}
