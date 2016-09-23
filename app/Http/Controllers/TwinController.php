<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;

class TwinController extends Controller
{

    public function __construct()
    {
        $this->data = [
            ['title' => 'Article 1', 'description' => 'Description de l\'article 1'],
            ['title' => 'Article 2', 'description' => 'Description de l\'article 1']
        ];
    }

    public function hello($name = '')
    {
        return response("Hello {$name}");
    }

    public function show($id)
    {
        if(!isset($this->data[$id])) return redirect()->route('sayHello', 'TWIN');
        $title = 'Show';
        $article = $this->data[$id];
        return view('articles.show', compact('title', 'article'));
    }

    public function index()
    {
        return view('articles.index')->with('articles', $this->data);
    }
}
