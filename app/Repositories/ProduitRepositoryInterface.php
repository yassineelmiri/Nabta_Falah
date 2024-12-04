<?php

namespace App\Repositories;

interface ProduitRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function getByAttributes(array $attributes);
    public function fornisseur($id);
}