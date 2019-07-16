<?php

namespace App\Http\Controllers;
use DB;
use App\Category;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    public function create()
    {
        $di = \request('name');
       // $new = Category::where('slug',request('name'))->get('id')->first();

        $new = Category::get()->where('slug',$di)->last()->category_id;
        // dd($new);
        $question = new Question;

        $question->body = request('editordata');
        $question->answers =\request('editordata2');
        $question->category_id = $new;
        $question->save();

        return back();

    }
    public function show()
    {
        //$data = DB::table('questions')->get()->last();

        $question =Question::all();
        return view('admin',compact('question'))->with('bodyClass','assets/img/quc01.png');
    }
    public function viewQuestion($lang)
    {
        $question =  Question::select('questions.*')
            ->join('categories as cat', 'cat.id', '=', 'questions.category_id')
            ->where('cat.slug', $lang)
            ->orderBy('questions.id', 'DESC')
            ->first();
       //$question =DB::select('select questions.* from questions inner join categories as cat on cat.id = questions.category_id where cat.slug ="python" order by questions.id desc limit 1');
       //dd($question);
        return view('questions/language',compact('question'))->with('bodyClass','assets/img/quc01.png');
        //return View::make('questions/language',compact('question'))->with('bodyClass', 'assets/img/quc01.png');


    }
}
