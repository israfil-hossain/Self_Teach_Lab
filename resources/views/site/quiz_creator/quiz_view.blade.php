@extends('layouts.include.master')
@section('title','SSC Quiz')
@section('main_section')

<div class="container">

            <div class="row bg-info p-3">
                <div class="col-md-4">
                    {{-- <h4>Quiz Name</h4> --}}
                </div>
                <div class="col-md-5"></div>
                <div class="col-md-3">
                    <h4>timer : 25:00

                    </h4>
                </div>
            </div>



    <form action="{{ route('result_store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @foreach ($other_lavel_data as $key => $value)

            <div class="question-section" id="question_list">

                <input type="hidden" value="{{ $value->id }}" name="qst_id[{{ $key }}]">
                <div id="qst-1" class="">
                    <div id="qiestion1" class="question" style="background-color: rgba(255, 0, 0, 0.6);">
                        <h3 class="text-uppercase p-2 text-center">{{ $value->question }}</h3>
                        <h3 id="question"></h3>
                    </div>
                    <div class="options">
                        <table class="table table-dark" style="background-color: rgba(255, 0, 0, 0.6);">
                            <tbody>
                                <tr class="table-active">
                                    <td style="background-color: rgba(233, 20, 119, 0.6);"><input type="radio" name="option[{{ $key }}]" value="1" id="first_opt[{{ $key }}]">
                                        <label for="first_opt[{{ $key }}]"  id="first_opt">{{ $value->first_option }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color: rgba(23, 216, 174, 0.6);"><input type="radio" name="option[{{ $key }}]" value="2" id="secound_option[{{ $key }}]">
                                        <label for="secound_option[{{ $key }}]"  id="secound_option">{{ $value->secound_option }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color: rgba(70, 230, 65, 0.6);" ><input type="radio" name="option[{{ $key }}]" value="3" id="third_option[{{ $key }}]">
                                        <label for="third_option[{{ $key }}]" id="third_option">{{ $value->third_option  }}</label>
                                    </td>
                                </tr>
                                <tr >
                                    <td style="background-color: rgba(185, 221, 53, 0.6);">
                                        <input type="radio" name="option[{{ $key }}]" value="4" id="fourth_option[{{ $key }}]">
                                        <label for="fourth_option[{{ $key }}]"  id="fourth_option">{{ $value->fourth_option }}</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="footer">
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="submit-btn btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </form>


</div>





@endsection
