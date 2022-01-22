<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clasicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Classicindex()
    {
        return view('site.quiz_creator.classicquiz');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function classicQuiz($class_type,$subject_id)
    {
        // $class_type = $request->class_id;
        // $subject_id = $request->subject_id;

        // dd($class_type,$subject_id);

        $other_lavel_data = DB::table('quiz AS QZ')
                    ->select('QST.*')
                    ->join('question AS QST',function($join){
                        $join->on('QST.quiz_code','=','QZ.id')
                        ->whereNull('QST.deleted_at');
                    })
                    ->where('QZ.type','=',2)
                    ->where('QZ.status','=',1)
                    ->where('QZ.class_level',$class_type)
                    ->where('QZ.subject_name',$subject_id)
                    ->whereNull('QZ.deleted_at')
                    ->get();

                    // dd($other_lavel_data);

        if($other_lavel_data == null){
            return redirect(route('classicquiz'))->with('message', "there are no Quiz set Yet.. Thanks ");
        }else{
            return view('other_clasic_quiz',compact('other_lavel_data'));
            // return view('other_clasic_quiz');
        }

    }
    public function view_clasic_quiz(){
        return view('other_clasic_quiz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ssc_preparation_page()
    {
        // dd("done");
        return view('ssc.ssc_page');
    }
    public function hsc_preparation_page()
    {
        // dd("done");
        return view('hsc.hsc_page');
    }
    public function admission_preparation_page()
    {
        // dd("done");
        return view('admission.admission_page');
    }
    public function bcs_preparation_page()
    {
        // dd("done");
        return view('bcs.bcs_page');
    }

    public function ssc_questions(Request $request)
    {
        // dd("done");
        // dd($request->all());
        $class_id = $request->class_id;
        $subject_id = $request->subject_id;

        $other_lavel_data = DB::table('quiz AS QZ')
                ->select('QST.*')
                ->join('question AS QST',function($join){
                    $join->on('QST.quiz_code','=','QZ.id')
                    ->whereNull('QST.deleted_at');
                })
                ->where('QZ.type','=',2)
                ->where('QZ.status','=',1)
                ->where('QZ.class_level',$class_id)
                ->where('QZ.subject_name',$subject_id)
                ->whereNull('QZ.deleted_at')
                ->get()->toArray();

                // dd($other_lavel_data);

                // return view('ssc.ssc_quiz_view',$other_lavel_data);
                return view('quiz_view',compact('other_lavel_data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
