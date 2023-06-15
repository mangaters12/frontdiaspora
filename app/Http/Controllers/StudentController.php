<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Student;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class StudentController extends Controller
{
    /** index page student list */
    public function student()
    {
        $studentList = Student::all();
        return view('student.student',compact('studentList'));
    }

    /** index page student grid */
    public function studentGrid()
    {
        $studentList = Student::all();
        return view('student.student-grid',compact('studentList'));
    }

    /** student add page */
    public function studentAdd()
    {
        return view('student.add-student');
    }
    
    /** student save record */
    public function studentSave(Request $request)
    {
        $request->validate([
            'name'    => 'required|string',
            'email'     => 'required|email',
            'gender'        => 'required|not_in:0',
            'phone_number1' => 'required|string',
            'phone_number2'          => 'required|string',
            'country'   => 'required|string',
            'state'      => 'required|string',
            'city'         => 'required|string',
            'zip_code'         => 'required|string',
            'address'       => 'required|string',
            'place_birth'       => 'required|string',
            'date_of_birth'       => 'required|string',
            'profession'       => 'required|string',
            'link_facebook'  => 'required|string',
            'link_instagram'  => 'required|string',
            'link_tiktok'  => 'required|string',
            'link_twitter'  => 'required',
            'upload'        => 'required|image',
        ]);
        
        DB::beginTransaction();
        try {
           
            $upload_file = rand() . '.' . $request->upload->extension();
            $request->upload->move(storage_path('app/public/student-photos/'), $upload_file);
            if(!empty($request->upload)) {
                $student = new Student;
                $student->name   = $request->name;
                $student->email    = $request->email;
                $student->gender       = $request->gender;
                $student->phone_number1= $request->phone_number1;
                $student->phone_number2         = $request->phone_number2;
                $student->country  = $request->country;
                $student->state     = $request->state;
                $student->city        = $request->city;
                $student->zip_code        = $request->zip_code;
                $student->place_birth      = $request->place_birth;
                $student->date_of_birth      = $request->date_of_birth;
                $student->address      = $request->address;
                $student->link_facebook = $request->link_facebook;
                $student->link_instagram = $request->link_instagram;
                $student->link_tiktok = $request->link_tiktok;
                $student->link_twitter= $request->link_twitter;
                $student->upload = $upload_file;
                $student->save();

                Toastr::success('Has been add successfully :)','Success');
                DB::commit();
            }

            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, Add new student  :)','Error');
            return redirect()->back();
        }
    }

    /** view for edit student */
    public function studentEdit($id)
    {
        $studentEdit = Student::where('id',$id)->first();
        return view('student.edit-student',compact('studentEdit'));
    }

    /** update record */
    public function studentUpdate(Request $request)
    {
        DB::beginTransaction();
        try {

            if (!empty($request->upload)) {
                unlink(storage_path('app/public/student-photos/'.$request->image_hidden));
                $upload_file = rand() . '.' . $request->upload->extension();
                $request->upload->move(storage_path('app/public/student-photos/'), $upload_file);
            } else {
                $upload_file = $request->image_hidden;
            }
           
            $updateRecord = [
                'upload' => $upload_file,
            ];
            Student::where('id',$request->id)->update($updateRecord);
            
            Toastr::success('Has been update successfully :)','Success');
            DB::commit();
            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, update student  :)','Error');
            return redirect()->back();
        }
    }

    /** student delete */
    public function studentDelete(Request $request)
    {
        dd('oke');
        DB::beginTransaction();
        try {
           
            if (!empty($request->id)) {
                Student::destroy($request->id);
                unlink(storage_path('app/public/student-photos/'.$request->avatar));
                DB::commit();
                Toastr::success('Student deleted successfully :)','Success');
                return redirect()->back();
            }
    
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Student deleted fail :)','Error');
            return redirect()->back();
        }
    }

    /** student profile page */
    public function studentProfile($id)
    {
        $studentProfile = Student::where('id',$id)->first();
        return view('student.student-profile',compact('studentProfile'));
    }
}
