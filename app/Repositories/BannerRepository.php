<?php
/**
 * Created by PhpStorm.
 * User: Clown
 * Date: 2018/12/4
 * Time: 18:22
 */

namespace App\Repositories;


use App\Models\Banner;
use Illuminate\Http\Request;

class BannerRepository
{
    protected $banner;

    protected $fillable = [
        'title', 'keywords', 'description', 'pic_url', 'thumbnail_url', 'is_display', 'is_single',
        'url', 'content', 'admin_id', 'author', 'ip', 'created_at', 'updated_at'
    ];

    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }

    public function list()
    {
        return $this->banner->select($this->fillable)->paginate(15);
    }

    public function find($id)
    {
        return $this->banner->select($this->fillable)->find($id);
    }

    public function create(Request $request)
    {
        $this->banner->create($request->only('name', 'email', 'password'));
    }


    public function update(Request $request, $id)
    {
        $banner = $this->banner->find($id);

        $banner->update($request->only('name', 'email', 'password'));

    }

    public function destroy($id)
    {


        $banner = $this->find($id);

        $banner->delete();

    }
}