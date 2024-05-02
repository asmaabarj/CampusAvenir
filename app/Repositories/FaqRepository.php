<?php

namespace App\Repositories;

use App\Interfaces\FaqInterface;
use App\Models\Faq;

class FaqRepository implements FaqInterface
{
    public function all()
    {
        return Faq::all();
    }
    public function admin()
    {
        return auth()->user();
    }

    public function create(array $data)
    {
        return Faq::create($data);
    }

    public function update(array $data, $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->update($data);
        return $faq;
    }

    public function delete($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
    }

    public function find($id)
    {
        return Faq::findOrFail($id);
    }
}
