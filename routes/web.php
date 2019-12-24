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
Route::group(['prefix' => ''], function(){
    Route::get('/', 'HomepageController@getHomePage');
    Route::get('/tieng-anh-lop-10', 'UnitsController@getUnits');
    Route::get('/tieng-anh-lop-10/{id}','UnitController@getUnit');
    Route::get('/kiem-tra', 'ExamsController@getExams');
    Route::get('/luyen-tap','ExercisesController@getExercises');
    Route::get('/bai-giang/{id}','LessonController@getLesson');
    Route::get('/dang-nhap','UserController@getLogin');
    Route::post('/dang-nhap','UserController@postLogin');
    Route::get('/dang-ky','UserController@getSignIn');
    Route::post('/dang-ky','UserController@postSignIn');
    Route::get('/dang-xuat','UserController@getLogout');
    Route::post('/dang-xuat','UserController@postLogout');
});

Route::group(['prefix' => 'binh-luan', 'middleware' => 'login'], function(){
    Route::get('/{id_user}/{type}/{id_type}','CommentController@getComment')->name("binh-luan");
    Route::post('/{id_user}/{type}/{id_type}','CommentController@postComment')->name("binh-luan");
    Route::get('/{id_user}/{id}','CommentController@getDeleteComment')->name('xoa-binh-luan');
});

Route::group(['prefix' => 'kiem-tra/{id}', 'middleware' => 'login'], function(){
    // Route::get('','ExercisesController@getExercises');
    Route::get('','ExamController@getExam')->name("kiem-tra");
    Route::post('cham-diem','ExamController@postExam')->name("cham-diem-kiem-tra");
    Route::get('ket-qua/{score}','ExamController@getResult')->name("ket-qua-kiem-tra");
});

Route::group(['prefix' => 'tieng-anh-lop-10/{id_unit}/luyen-tap/{id_exercise}', 'middleware' => 'login'], function(){
    Route::get('','ExerciseController@getExercise')->name("luyen-tap");
    Route::post('cham-diem','ExerciseController@postExercise')->name("cham-diem-luyen-tap");
    Route::get('ket-qua/{score}','ExerciseController@getResult')->name("ket-qua-luyen-tap");
});

Route::group(['prefix' => 'trang-ca-nhan', 'middleware' => 'login'], function(){
    Route::get('','ProfileController@getProfile')->name('trang-ca-nhan');
    Route::post('','ProfileController@postProfile')->name('trang-ca-nhan');

    Route::get('/thay-doi-thong-tin','ProfileController@getEditProfile')->name('thay-doi-thong-tin');
    Route::post('/thay-doi-thong-tin','ProfileController@postEditProfile')->name('thay-doi-thong-tin');

    // Route::get('/doi-mat-khau','UserController@getChangePassword')->name('doi-mat-khau');
    // Route::post('/doi-mat-khau','UserController@postChangePassword')->name('doi-mat-khau');
});

Route::get('admin/login', 'UserController@getAdminLogin');
Route::post('admin/login', 'UserController@postAdminLogin');

Route::get('admin/logout', 'UserController@getAdminLogout');
Route::post('admin/logout', 'UserController@postAdminLogout');

Route::group(['prefix' => 'ajax'], function() {
    //
    Route::post('dang-ky', 'AjaxController@postSignUp');
    Route::get('cart_detail_order/{cart?}', 'AjaxController@getCartDetailOrder');
    Route::get('rating/{data?}', 'AjaxController@postRating')->name('rating');
});


Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function() {
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

    
    Route::group(['prefix' => 'Banner'], function() {
        //admin/Type/list
        Route::get('list', 'Admin\BannerController@getListBanner');

        Route::get('add', 'Admin\BannerController@getAddBanner');
        Route::post('add', 'Admin\BannerController@postAddBanner');


        Route::get('edit/{id}', 'Admin\BannerController@getEditBanner');
        Route::post('edit/{id}', 'Admin\BannerController@postEditBanner');

        Route::get('delete/{id}', 'Admin\BannerController@getDeleteBanner');

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
    
    Route::group(['prefix' => 'QuestionExercise'], function(){
        Route::get('list', 'Admin\QuestionExerciseController@getListQuestion');

        Route::get('add', 'Admin\QuestionExerciseController@getAddQuestion');
        Route::post('add', 'Admin\QuestionExerciseController@postAddQuestion');

        Route::get('delete/{id}', 'Admin\QuestionExerciseController@getDeleteQuestion');

    });

    Route::group(['prefix' => 'QuestionExam'], function(){
        Route::get('list', 'Admin\QuestionExamController@getListQuestion');

        Route::get('add', 'Admin\QuestionExamController@getAddQuestion');
        Route::post('add', 'Admin\QuestionExamController@postAddQuestion');

        Route::get('delete/{id}', 'Admin\QuestionExamController@getDeleteQuestion');

    });
});