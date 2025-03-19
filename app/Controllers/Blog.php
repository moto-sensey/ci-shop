<?php


namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Blog extends BaseController
{
    public $model;
    
    public function __construct()
    {
        $this->model = new BlogModel();
    }
    
    public function index()
    {
        $posts = $this->model->findAll();
        
        $data = [
            'title' => 'Блог',
            'posts' => $posts,
        ];
        return view('blog/index', $data);
    }

    public function view($id)
    {
        $post = $this->model->find($id);
        
        if(!$post){
            throw PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $post['title'],
            'post' => $post,
        ];
        return view('blog/view', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create article'
        ];

        return view('blog/create', $data);
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->model->insert($data);

        return redirect('blog_create');
    }

}