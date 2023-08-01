<?php

namespace App\Controllers;

use App\Models\FinanceModel;

class Finance extends BaseController
{
    public function index()
    {
        $financeModel = new FinanceModel();
        $finances = $financeModel->findAll();

        return view('adminPage/finance', ['finances' => $finances]);
    }

    public function create()
    {
        return view('adminPage/add_finance');
    }

    public function store()
    {
        $financeModel = new FinanceModel();

        $income = $this->request->getVar('income');
        $expense = $this->request->getVar('expense');
        $date = $this->request->getVar('date');
        $adminId = $this->request->getVar('admin_id');

        // Get the latest cash value
        $latestFinance = $financeModel->orderBy('id', 'DESC')->first();
        $latestCash = $latestFinance ? $latestFinance['cash'] : 0;

        $cash = $latestCash + $income - $expense;

        $financeModel->insert([
            'income' => $income,
            'expense' => $expense,
            'date' => $date,
            'cash' => $cash,
            'admin_id' => $adminId,
        ]);

        return redirect()->to('/finance')->with('success', 'Finance record created successfully.');
    }


    public function delete($id)
    {
        $financeModel = new FinanceModel();
        $financeModel->delete($id);

        return redirect()->to('/finance')->with('success', 'Finance record deleted successfully.');
    }
}

