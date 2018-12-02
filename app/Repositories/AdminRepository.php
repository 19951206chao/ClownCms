<?php
/**
 * Created by PhpStorm.
 * User: Clown
 * Date: 2018/12/2
 * Time: 23:48
 */
namespace App\Repositories;

use App\Models\Admin;

class AdminRepository
{
    protected $admin;

    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    public function list()
    {
        return $this->admin->paginate(20);
    }

}