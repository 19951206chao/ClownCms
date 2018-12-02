<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Repositories\AdminRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $repo;

    public function __construct(AdminRepository $repository)
    {
        $this->repo = $repository;
    }

    public function index()
    {
        $admins = $this->repo->list();

        return view('admin.admins.index',compact('admins'));
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function edit(Admin $admin)
    {
        return view('admin.admins.edit',compact('admin'));
    }
}
