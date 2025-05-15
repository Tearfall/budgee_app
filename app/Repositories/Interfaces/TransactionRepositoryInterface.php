<?php
namespace App\Repositories\Interfaces;

Interface TransactionRepositoryInterface{
    public function createTransaction($data);
    public function updateTransaction($data, $id);
    public function getAllTransactions();
    public function findTransaction($id);
    public function deleteTransaction($id);
}