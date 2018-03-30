<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Site\UserDataTable;

class DashboardController extends Controller
{
    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('manage.dashboard');
    }
}