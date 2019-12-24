<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;

class BannerController extends Controller
{
    //
    public function getListBanner(){
        $banner= Banner::all();
        return view('admin.banner.list',['banner'=>$banner]);
    }

    public function getAddBanner(){
        return view('admin.banner.add');
    }
    public function postAddBanner(Request $request){
        $this->validate($request,
            [
                'title'=>'required|min:3|max:100',
                'avatar'=>'required',
            ],
            [
                'title.required'=>'bạn chưa nhập thể loại',
                'title.min'=>'tên thể loại phải có đọ dài từ 3 cho đến 100 hý tự',
                'title.max'=>'tên thể loại phải có đọ dài từ 3 cho đến 100 hý tự',
                'avatar.required'=>'bạn chưa chọn ảnh đại diện cho Banner'
            ]
        );
        $banner = new Banner;
        $banner->title = $request->title;
        $banner->desc = $request->desc;
        $extension = ['jpg','png','jpeg','end'];
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extension as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Banner/add')->with('Warning','Just except .jpg, .png, .jpeg');
                    
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
            $banner->avatar = $name2;
        }
        else{
            $banner->avatar = "";
        }   
        $banner->save();
        return redirect('admin/Banner/add')->with('Information','Success');
    }
    public function getEditBanner($id){
        $banner= Banner::find($id);
        return view('admin.banner.edit',['banner'=>$banner]);
    }

    public function postEditBanner(Request $request, $id){
        $banner=Banner::find($id);
        $this->validate($request,
            [
                'title'=>'required|min:3|max:100',
            ],
            [
                'title.required'=>'bạn chưa nhập thể loại',
                'title.min'=>'tên thể loại phải có độ dài từ 3 cho đến 100 hý tự',
                'title.max'=>'tên thể loại phải có độ dài từ 3 cho đến 100 hý tự',
            ]  
        );
        $banner->title = $request->title;
        $banner->desc = $request->desc;
        $extension = ['jpg','png','jpeg','end'];
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $duoi = $file->getClientOriginalExtension();
            foreach ($extension as $key) {
                # code...
                if($key == 'end'){
                    return redirect('admin/Banner/add')->with('Warning','Just except .jpg, .png, .jpeg');
                    
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
            $banner->avatar = $name2;
        }
        $banner->save();
        return redirect('admin/Banner/edit/'.$id)->with('Information','Success');

        

    }    
    public function getDeleteBanner($id)
    {
        $banner = Banner::find($id);
        $banner->delete();

        return redirect('admin/Banner/list') ->with('Information','Success');

    }
}
