<?php


namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Blog extends BaseController
{

    public function index()
    {
        $blogModel = new BlogModel();
        $posts = $blogModel->findAll();
        
        $data = [
            'title' => 'Блог',
            'posts' => $posts,
        ];
        return view('blog/index', $data);
    }

    public function view($id)
    {
        $blogModel = new BlogModel();
        $post = $blogModel->find($id);
        
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
        $blogModel = new BlogModel();
        $blogModel->insert($data);

        return redirect('blog_create');
    }

}