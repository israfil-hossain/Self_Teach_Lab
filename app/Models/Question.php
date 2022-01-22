<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Question extends Model
{

    protected $table = 'question';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];



    public function question_data($request, $quiz_last_id){

        $question_list = [];

        for ($i = 0; $i < count($request->question); $i++) {

            if (is_null($request->question[$i])) {
                continue;
            }

            $question_list[] = [

                'quiz_code' => (isset($quiz_last_id) ? $quiz_last_id : 0),
                'question' => $request->question[$i],
                'first_option' => $request->first_option[$i],
                'secound_option' => $request->secound_option[$i],
                'third_option' => $request->third_option[$i],
                'fourth_option' => $request->forth_option[$i],
                'result' => $request->result[$i],

                'created_at' => Carbon::now(),
                'created_by' => (isset(Auth::user()->id) ? Auth::user()->id : 0 ),

            ];

        }
        // dd($question_list);
        return $question_list;
    }

    public function question_update_data($request){

        $question_list = [];

        for ($i = 0; $i < count($request->qst_id); $i++) {

            if (is_null($request->qst_id[$i])) {
                continue;
            }

            $question_list[] = [

                // 'quiz_code' => (isset($quiz_last_id) ? $quiz_last_id : 0),

                'id' => $request->qst_id[$i],
                'question' => $request->question[$i],
                'first_option' => $request->first_option[$i],
                'secound_option' => $request->secound_option[$i],
                'third_option' => $request->third_option[$i],
                'fourth_option' => $request->fourth_option[$i],
                'result' => $request->result[$i],

                'updated_at' => Carbon::now(),
                'created_by' => (isset(Auth::user()->id) ? Auth::user()->id : 0 ),

            ];

        }
        // dd($question_list);
        return $question_list;
    }


}
