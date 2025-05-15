<?php 
namespace App\Repositories;

use App\Repositories\Interfaces\TransactionRepositoryInterface;
use App\Models\Transaction;

class TransactionRepository implements TransactionRepositoryInterface
{
    public function createTransaction($data)
    {
        return Transaction::create($data);
    }

    public function updateTransaction($data, $id)
    {
        $transaction = Transaction::where('id', $id)->first();
        $transaction->amount = $data['amount'];
        $transaction->description = $data['description'];
        $transaction->type = $data['type'];
        $transaction->category = $data['category'];
        $transaction->save();
    }
    
    public function getAllTransactions()
    {
        return Transaction::latest()->paginate(10);
    }

    public function findTransaction($id)
    {
        return Transaction::find($id);
    }

    public function deleteTransaction($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
    }
}