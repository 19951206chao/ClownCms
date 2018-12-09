<?php
/**
 * Created by PhpStorm.
 * User: Clown
 * Date: 2018/12/2
 * Time: 23:48
 */

namespace App\Repositories;

use Auth;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminRepository
{
    protected $admin;

    protected $fillable = ['id', 'name', 'email', 'created_at', 'updated_at'];

    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    public function list()
    {
        return $this->admin->select($this->fillable)->paginate(20);
    }

    public function find($id)
    {
        return $this->admin->select($this->fillable)->find($id);
    }

    public function create(Request $request)
    {
        $input = $request->only('name', 'email');

        $input['password'] = \Hash::make($request->password);

        $this->admin->create($input);
    }


    public function update(Request $request, $id)
    {
        $admin = $this->admin->find($id);

        $input = $request->only('name', 'email');

        $input['password'] = \Hash::make($request->password);

        $admin->update($input);

    }

    public function destroy($id)
    {
        if ($id == 1 || $id == Auth::id())
            abort(403);

        $admin = $this->find($id);

        $admin->delete();

    }

}