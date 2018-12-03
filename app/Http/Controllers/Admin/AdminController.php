<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AdminRequest;
use App\Repositories\AdminRepository;
use App\Http\Controllers\Controller;
use Auth;

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

        return view('admin.admins.index', compact('admins'));
    }

    public function create()
    {
        if (Auth::id() != 1)
            abort(403);

        return view('admin.admins.create');
    }

    public function edit($id)
    {
        if (Auth::id() != 1 && Auth::id() != $id)
            abort(403);

        $admin = $this->repo->find($id);

        return view('admin.admins.edit', compact('admin'));
    }

    public function update(AdminRequest $request, $id)
    {
        if (Auth::id() != 1 && Auth::id() != $id)
            abort(403);

        $this->repo->update($request, $id);

        if (Auth::id() == $id)
            Auth::logout();

        return redirect()->route('admin.admins.index')->with('success', '修改成功');
    }

    public function store(AdminRequest $request)
    {
        if (Auth::id() != 1)
            abort(403);

        $this->repo->create($request);

        return redirect()->route('admin.admins.index')->with('success', '创建成功');
    }

    public function destroy($id)
    {
        if (Auth::id() != 1)
            abort(403);

        $this->repo->destroy($id);

        return back()->with('success', '删除成功');
    }
}
