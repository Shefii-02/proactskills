<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseFaq;
use App\Models\CourseRegisted;
use App\Models\CourseReview;
use App\Models\Payment;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $activated_course = Course::where('status',1)->count();
        $students         = User::orderBy('created_at','desc')->where('type','Student')->count();
        $payemnts         = Payment::where('status','1')->sum('amount');
        $registed         = CourseRegisted::where('status','1')->count();
        return view('backend.index',compact('activated_course','students','payemnts','registed'));
    }



    public function course(){
        $active_courses     = Course::where('status',1)->count();
        $all_courses        = Course::get();
        $in_active_courses  = Course::where('status',0)->count();

        return view('backend.course-list',compact('active_courses','all_courses','in_active_courses'));
    }

    public function course_create(){
        return view('backend.course-create');
    }


    public function course_store(Request $request){
       
        try{
            $new_one                    = new Course();
            $new_one->course_name       = $request->course_name ?? null;
            $new_one->course_time       = $request->course_time ?? null;
            $new_one->total_days        = $request->total_days ?? null;
            $new_one->price             = $request->price ?? null;
            $new_one->discount_price    = $request->discount_price ?? null;
            $new_one->disc_exp_date     = $request->disc_exp_date ?? null;
            $new_one->level_course      = $request->level_course ?? null;
            $new_one->banner_title      = $request->banner_title ?? null;
            $new_one->banner_sub_title  = $request->banner_sub_title ?? null;
            $new_one->banner_short_description  = $request->banner_short_description ?? null;
            $new_one->banner_btn_text   = $request->banner_btn_text ?? null;
            $new_one->banner_text_color = $request->banner_text_color ?? null;
            $new_one->banner_btn_color  = $request->banner_btn_color ?? null;
            $new_one->banner_yt_link    = $request->banner_yt_link ?? null;
            $new_one->bc_title_1        = $request->bc_title_1 ?? null;
            $new_one->bc_count_1        = $request->bc_count_1 ?? 1;
            $new_one->bc_title_2        = $request->bc_title_2 ?? null;
            $new_one->bc_count_2        = $request->bc_count_2 ?? 1;
            $new_one->bc_title_3        = $request->bc_title_3 ?? null;
            $new_one->bc_count_3        = $request->bc_count_3 ?? 1;
            $new_one->review_btn_text   = $request->review_btn_text ?? null;
            $new_one->review_text_color = $request->review_text_color ?? null;
            $new_one->review_btn_color  = $request->review_btn_color ?? null;
            $new_one->add_info_title_1  = $request->add_info_title_1 ?? null;
            $new_one->key_notes_1       = json_encode($request->key_notes_1) ?? null;
            $new_one->add_info_title_2  = $request->add_info_title_2 ?? null;
            $new_one->key_notes_2       = json_encode($request->key_notes_2) ?? null;
            $new_one->add_yt_link       = $request->add_yt_link ?? null;
            $new_one->add_btn_text      = $request->add_btn_text ?? null;
            $new_one->add_btn_color     = $request->add_btn_color ?? null;
            $new_one->add_text_color    = $request->add_text_color ?? null;
            $new_one->class_details_title_1 = $request->class_details_title_1 ?? null;
            $new_one->class_details_1       = $request->editor1 ?? null;
            $new_one->class_details_title_2 = $request->class_details_title_2 ?? null;
            $new_one->class_details_2   = $request->editor2 ?? null;
            $new_one->trainer_name      = $request->trainer_name ?? null;
            $new_one->trainer_position  = $request->trainer_position ?? null;
            $new_one->trainer_description= $request->editor3 ?? null;
            $new_one->seo_titile        = $request->seo_titile ?? null;
            $new_one->seo_description   = $request->seo_description ?? null;
            $new_one->seo_keywords      = $request->seo_keywords ?? null;
            if($request->picture != null){
                $new_one->picture           = $this->__uploadPicture($request->picture,'images/course/')  ?? null;
            }
            if($request->banner_image != null){
                $new_one->banner_image      = $this->__uploadPicture($request->banner_image,'images/course/') ?? null;
            }
            if($request->add_info_image != null){
                $new_one->add_info_image    = $this->__uploadPicture($request->add_info_image,'images/course/') ?? null;
            }
            if($request->trainer_image != null){
                $new_one->trainer_image     = $this->__uploadPicture($request->trainer_image,'images/course/')  ?? null;
            }

            $new_one->save();

            if(count($request->question) > 0){
                foreach($request->question as $key => $item){
                    $new_faq            = new CourseFaq();
                    $new_faq->question  = $request->question[$key];
                    $new_faq->answer    = $request->answer[$key];
                    $new_faq->course_id = $new_one->id;
                    $new_faq->save();
                }
            }

            
            if(count($request->question) > 0){
                foreach($request->question as $key => $list){
                    $new_reviews                = new CourseReview();
                    $new_reviews->image         = $this->__uploadPicture($request->review_image[$key],'images/course/')  ?? null; 
                    $new_reviews->name          = $request->name[$key];
                    $new_reviews->star          = $request->review_rating[$key];
                    $new_reviews->course_id     = $new_one->id;
                    $new_reviews->save();
                }
            }
            return redirect('/admin/course')->with('message', 'Successfully Added');

        }
        catch(Exception $e){
            // dd($e->getMessage());
            redirect()->back()->with('message','Data added Error..!!');
        }
    }

    public function course_edit($id){

    }
    public function course_update($id,Request $request){

    }
    public function course_delete($id){
        try{
            $course = Course::whereId($id)->first() ?? abort(404);
            CourseFaq::where('course_id',$id)->delete();
            $reviews = CourseReview::where('course_id',$id)->get();
            if($reviews){
                foreach($reviews as $list){
                    $this->__deleteImage('images/course/',$list->image);
                    CourseReview::whereId($list->id)->delete();
                }
            }
            $this->__deleteImage('images/course/',$course->picture);
            $this->__deleteImage('images/course/',$course->banner_image);
            $this->__deleteImage('images/course/',$course->add_info_image);
            $this->__deleteImage('images/course/',$course->trainer_image);
            Course::whereId($id)->delete();
            return redirect('/admin/course')->with('message','Successfully Deleted');

        }
        catch(Exception $e){
            dd($e->getMessage());
        }
    }


    public function students(){
        $students = User::orderBy('created_at','desc')->where('type','Student')->get();
        return view('backend.students',compact('students'));
    }

    public function payments(){
        $payments =  Payment::orderBy('created_at','desc')->get();
        return view('backend.payments',compact('payments'));
    }
    public function registed_students(){

        $registed = CourseRegisted::orderBy('created_at','desc')->get();
        return view('backend.registed-course',compact('registed'));
    }






    public function __uploadPicture($name,$path='')
    {
       
        if(!empty($name) && strlen($name) > 6) {
            $picture = $name;
            if(preg_match('/data:image/', $picture)) {
                list($type, $picture) = explode(';', $picture);
                list($i, $picture) = explode(',', $picture);
                $picture = base64_decode($picture);
                $image_name = Str::random(30) . '.png';
                Storage::put($path . $image_name, $picture);
                return  $image_name;
            }

            return false;
        }
        return false;
    }
    
    
    public function __deleteImage($path,$existing = '') {

        if($existing != '')
        @unlink($path.$existing);
        
    }

    public function profile(){
        
        return view('backend.profile');
    }

    public function profile_update(Request $request)
    {
        try{
            $up_date = User::whereId(auth()->user()->id)->first() ?? abort(404);
            $up_date->name     =  $request->name;
            $up_date->mobile     =  $request->mobile;
            if($request->has('password') && strlen($request->password)>0){
                $up_date->password = $request->password;
            }
            if($request->has('picture')){
                $this->__deleteImage('images/users',$up_date->image);
                $up_date->image = $this->__uploadPicture($request->picture,'images/users/') ?? null;
               
            }
            $up_date->save();

            return redirect()->back()->with('message','Successfully Updated');
        }
        catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
