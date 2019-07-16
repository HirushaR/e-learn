<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Point;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AnswerController extends Controller
{
    public function create()
    {
        $user= Auth::user()->id;
        $answer =new Answer();
        $answer->user_id=$user;
        $answer->question_id =\request('question_id');
        $answer->body= \request('useranswer');
        $answer->save();
        return back();
    }
    public function getAllAnswers($id)
    {
        $qs = Question::get()->where('id',$id)->last()->id;
       $answer= Answer::get()->where('question_id',$qs);
        return view('questions.Answers', compact('answer'))->with('bodyClass','assets/img/quc01.png');
    }
    public function markAsSolution()
    {

        $qid = Input::get('questionID');

        $uid = Input::get('userID');

      $sol=Answer::get()->where('question_id',$qid)->where('user_id',$uid)->last()->update(['correct' => 1]);
      if ($sol) {
          if (Point::where('user_id', $uid)->get()->last()) {
              Point::get()->where('user_id', $uid)->first()->increment('loop_points',4);
              Point::get()->where('user_id', $uid)->first()->increment('correct_answers',1);
              return back();
          } else {

              $point =new Point();
              $point->user_id=$uid;
              $point->loop_points =4;
              $point->correct_answers= 1;
              $point->save();
              return back();
          }


      }
        return "error";

    }

}
