<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositories\Interfaces\BlogRepositoryInterface;



class BlogController extends Controller
{
    protected $blog;

    public function __construct(BlogRepositoryInterface $blog)
    {
        $this->blog = $blog;
    }

    public function index()
    {
        $data = [
            'posts' => $this->blog->all()
        ];

        return view('templates.posts', $data);
    }

}
