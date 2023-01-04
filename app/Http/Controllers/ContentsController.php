<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // ここを追加
use Illuminate\Http\Request;
use App\Models\contents_table; 

class ContentsController extends Controller
{
    public function home()
    {
        return view('contents.home');
    }

    public function all_contents()
    {
        $contents = contents_table::all();
        return view('contents.all_contents', compact('contents'));
    }

    public function create_content()
    {
        return view('contents.create_content');
    }

    public function store_content(Request $request)
    {
        // 記事登録処理
        contents_table::create([
            'title' => $request->title,
            'link' => $request->link,
            'author' => $request->author,
            'level' => $request->level,
            'category' => $request->category,
            'time' => $request->time,
            'style' => $request->style,
            'language' => $request->language,
            'detail' => $request->detail,
        ]);

        return redirect()->route('all_contents');
    }

    public function content_detail($id)
    {
        $content = contents_table::find($id);
        return view('contents.content_detail',compact('content'));
    }
    
}
