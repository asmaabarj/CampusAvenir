<?php

namespace App\Services;

use App\Interfaces\FaqInterface;

class FaqService
{
    protected $faqRepository;

    public function __construct(FaqInterface $faqRepository)
    {
        $this->faqRepository = $faqRepository;
    }

    public function all()
    {
        return $this->faqRepository->all();
    }

    public function create(array $data)
    {
        return $this->faqRepository->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->faqRepository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->faqRepository->delete($id);
    }

    public function find($id)
    {
        return $this->faqRepository->find($id);
    }
}
