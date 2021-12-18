<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $param = [
            'content' => $request->content
        ];
        Todo::create($param);
        return redirect('/');
    }
    public function update(Request $request)
    {
        $param = [
            'content' => $request->content
        ];
        DB::table('todocontents')->where('id', $request->id)->update($param);
        return redirect('/');
    }

    public function delete(Request $request)
    {
        DB::table('todocontents')->where('id', $request->id)->delete();
        return redirect('/');
    }
}
