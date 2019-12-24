<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Unit;

class UnitController extends Controller
{
    //    
    public function getListUnit(){
        $unit= Unit::all();
        return view('admin.unit.list',['unit'=>$unit]);
    }

    public function getAddUnit(){
        return view('admin.unit.add');
    }
    public function postAddUnit(Request $request){
        $this->validate($request,
            [
                'title'=>'required|max:100',
                'avatar'=>'required',
            ],
            [
                'title.required'=>'Title is required',
                'title.max'=>'Title max length is 100',
                'avatar.required'=>'Avatar is required'
            ]
        );
        $unit = new Unit;
        $unit->title = $request->title;
        $unit->desc = $request->desc;
        $extension = ['jpg','png','jpeg','end'];
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extension as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Unit/add')->with('Warning','Just except .jpg, .png, .jpeg');
                }
                else if($duoi == $key){
                    break;
                }
            }
            $name = $file->getClientOriginalName();
            $name2 = str_random(4)."_".$name;
            while (file_exists("upload/images/".$name2)) {
                # code...
                $name2 = str_random(4)."_".$name;
            }
            $file->move("upload/images",$name2);
            $unit->avatar = $name2;
        }
        else{
            $unit->avatar = "";
        }   
        $unit->save();
        return redirect('admin/Unit/add')->with('Information','Success');
    }
    public function getEditUnit($id){
        $unit= Unit::find($id);
        return view('admin.unit.edit',['unit'=>$unit]);
    }

    public function postEditUnit(Request $request, $id){
        $unit=Unit::find($id);
        $this->validate($request,
            [
                'title'=>'required|max:100',
            ],
            [
                'title.required'=>'Title is required',
                'title.max'=>'Title max length is 100',
            ]  
        );
        $unit->title = $request->title;
        $unit->desc = $request->desc;
        $extension = ['jpg','png','jpeg','end'];
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extension as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Unit/add')->with('Warning','Just except .jpg, .png, .jpeg');
                    
                }
                else if($duoi == $key){
                    break;
                }
            }
            $name = $file->getClientOriginalName();
            $name2 = str_random(4)."_".$name;
            while (file_exists("upload/images/".$name2)) {
                # code...
                $name2 = str_random(4)."_".$name;
            }
            $file->move("upload/images",$name2);
            $unit->avatar = $name2;
        }
        $unit->save();
        return redirect('admin/Unit/edit/'.$id)->with('Information','Success');

        

    }    
    public function getDeleteUnit($id)
    {
        $unit = Unit::find($id);
        $unit->delete();

        return redirect('admin/Unit/list') ->with('Information','Success');

    }
}
