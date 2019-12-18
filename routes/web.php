<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.trangchu');
});
Route::get('/tintuc', function () {
    return view('pages.tintuc');
});

Route::group(['prefix' => 'admin'], function() {
    //
    Route::get('', 'Admin\UnitController@getAddUnit');
    Route::group(['prefix' => 'ajax'], function() {
        //
        // Route::get('topic/{idtype}', 'Admin\AjaxController@getTopic');
        // Route::get('content/{idtopic}', 'Admin\AjaxController@getContent');
        // Route::get('cart_state', 'Admin\AjaxController@getCartState')->name('admin.cartstate');
    });
    Route::group(['prefix' => 'Unit'], function() {
        //admin/Type/list
        Route::get('list', 'Admin\UnitController@getListUnit');

        Route::get('add', 'Admin\UnitController@getAddUnit');
        Route::post('add', 'Admin\UnitController@postAddUnit');


        Route::get('edit/{id}', 'Admin\UnitController@getEditUnit');
        Route::post('edit/{id}', 'Admin\UnitController@postEditUnit');

        Route::get('delete/{id}', 'Admin\UnitController@getDeleteUnit');

    });

    Route::group(['prefix' => 'Lesson'], function() {
        //admin/Type/list
        Route::get('list', 'Admin\LessonController@getListLesson');
        
        Route::get('add', 'Admin\LessonController@getAddLesson');
        Route::post('add', 'Admin\LessonController@postAddLesson');


        Route::get('edit/{id}', 'Admin\LessonController@getEditLesson');
        Route::post('edit/{id}', 'Admin\LessonController@postEditLesson');

        Route::get('delete/{id}', 'Admin\LessonController@getDeleteLesson');

    });

    Route::group(['prefix' => 'Exercise'], function() {
        //admin/Type/list
        Route::get('list', 'Admin\ExerciseController@getListExercise');
        
        Route::get('add', 'Admin\ExerciseController@getAddExercise');
        Route::post('add', 'Admin\ExerciseController@postAddExercise');


        Route::get('edit/{id}', 'Admin\ExerciseController@getEditExercise');
        Route::post('edit/{id}', 'Admin\ExerciseController@postEditExercise');

        Route::get('delete/{id}', 'Admin\ExerciseController@getDeleteExercise');

    });

    Route::group(['prefix' => 'Exam'], function() {
        //
        Route::get('list', 'Admin\ExamController@getListExam');

        Route::get('add', 'Admin\ExamController@getAddExam');
        Route::post('add', 'Admin\ExamController@postAddExam');
        
        Route::get('edit/{id}', 'Admin\ExamController@getEditExam')->name('admin.edit');
        Route::post('edit/{id}', 'Admin\ExamController@postEditExam');
        
        Route::get('delete/{id}', 'Admin\ExamController@getDeleteExam');
        
    });
    Route::group(['prefix' => 'NewWord'], function(){
        Route::get('list', 'Admin\NewWordController@getListNewWord');

        Route::get('add', 'Admin\NewWordController@getAddNewWord');
        Route::post('add', 'Admin\NewWordController@postAddNewWord');

        Route::get('edit/{id}', 'Admin\NewWordController@getEditNewWord');
        Route::post('edit/{id}', 'Admin\NewWordController@postEditNewWord');

        Route::get('delete/{id}', 'Admin\NewWordController@getDeleteNewWord');

        Route::group(['prefix' => 'NewWorddetail'], function() {
            //
            Route::get('list/{idcart}', 'Admin\NewWordDetailController@getListNewWord');
        });
    });
    
    Route::group(['prefix' => 'Question'], function(){
        Route::get('list', 'Admin\QuestionController@getListQuestion');

        Route::get('add', 'Admin\QuestionController@getAddQuestion');
        Route::post('add', 'Admin\QuestionController@postAddQuestion');

        Route::get('delete/{id}', 'Admin\QuestionController@getDeleteQuestion');

        Route::group(['prefix' => 'Questiondetail'], function() {
            //
            Route::get('list/{idcart}', 'Admin\QuestionDetailController@getListQuestion');
        });
    });
});