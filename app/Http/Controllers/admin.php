<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\Teacher_Register_Data;
use App\Models\Student_Register;
use App\Models\course;
use App\Models\course_teacher_pivot;
use Illuminate\Support\Facades\Storage;
use App\Models\Notification;
class admin extends Controller
{
    function courses()
    {
        $coursedataes = course::with('teacher')->get();

        return view('courses')->with('coursedataes', $coursedataes);
    }
    function Admin()
    {
        $teachers = Teacher_Register_Data::orderBy('id','desc')->get();
        $students = Student_Register::orderBy('id','desc')->get();
        $No_student = Student_Register::count();
        $No_Teacher = Teacher_Register_Data::count();

        $meassage = 'ok';
        return view('AdminView.adminview', compact('meassage', 'teachers', 'students', 'No_student', 'No_Teacher'));
    }
    function Delete_Teacher($id)
    {
        $Teacher = Teacher_Register_Data::where('Teacher_id',$id)->delete();
        return back()->with('deleteteacher', 'Teacher deleted successfully');
    }
    function Delete_Course($id)
    {
        $Course = course::find($id);
        $path = public_path('storage' . '/' . $Course->Course_Img);
        if (file_exists($path)) {
            unlink($path);
            $Course->delete();
            return back()->with('deletecourse', 'Course deleted successfully');
        } else {
            return back()->with('deletecourse', 'Course Imagae not found Please Retry !');
        }
    }

    function Add_Teacher(Request $req)
    {
        $meassage = 'false';
        $request = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'idno' => 'required',
            'course' => 'required',
            'salary' => 'required',
            'status' => 'required',
        ]);

        $teachers = new teacher();
        if ($req['id'] == null) {
            $teachers->Teacher_name = $request['name'];
            $teachers->Teacher_Address = $request['address'];

            $teachers->Teacher_ID_NO = $request['idno'];
            $teachers->Teacher_Course_name = $request['course'];
            $teachers->Teacher_Salary = $request['salary'];
            $teachers->Teacher_Status = $request['status'];
            $teachers->save();

            return back()->with('success', 'Teacher added successfully');
        } else {
            $update_Teacher = teacher::where('Teacher_id', $req['id'])->first();
            if ($update_Teacher == null) {
                return back()->with('teachererror', 'Teacher  not found');
            } else {
                $update_Teacher->Teacher_name = $request['name'];
                $update_Teacher->Teacher_Address = $request['address'];
                $update_Teacher->Teacher_ID_NO = $request['idno'];
                $update_Teacher->Teacher_Course_name = $request['course'];
                $update_Teacher->Teacher_Salary = $request['salary'];
                $update_Teacher->Teacher_Status = $request['status'];
                $update_Teacher->save();

                return back()->with('success', 'Teacher updated successfully');
            }
        }
    }

    function Add_Course(Request $request)
    {
        $req = request()->validate([
            'cname' => 'required',
            'cprice' => 'required',
            'tid' => 'required',
            'cduration' => 'required',
            'ctime' => 'required',
        ]);

        if ($request['cid'] == null) {
            $newCourse = new course();

            if ($request['image'] != null) {
                $imageName = time() . '.' . $request['image']->extension();

                $newCourse->Course_name = $req['cname'];
                $newCourse->Course_Price = $req['cprice'];
                $newCourse->Teacher_id = $req['tid'];
                $newCourse->Course_Time = $req['ctime'];
                $newCourse->Course_Duration = $req['cduration'];
                $request->image->move(public_path('Storage'), $imageName);
                $newCourse->Course_Img = $imageName;

                $newCourse->save();
                $teacher = course::latest()->first();
                $teacher->teacher()->attach($req['tid']);
                return back()->with('addcourse', 'course sucessfully added');
            } else {
                return back()->with('imgrequired', 'Image is required');
            }
        } else {
            $update_Course = course::where('C_id', $request['cid'])->first();
            if ($update_Course != null) {
                if ($request->has('image')) {
                    $imagePath = public_path('/storage/' . $update_Course->Course_Img);

                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    } else {
                        echo 'Image does not exist.';
                    }
                    $update_Course->Course_name = $req['cname'];
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('Storage'), $imageName);
                    $update_Course->Course_Price = $req['cprice'];
                    $update_Course->Teacher_id = $req['tid'];
                    $update_Course->Course_Time = $req['ctime'];
                    $update_Course->Course_Duration = $req['cduration'];

                    $update_Course->Course_Img = $imageName;
                    $update_Course->save();
                    return back()->with('addcourse', 'course sucessfully updated');
                } else {
                    $update_Course->Course_name = $req['cname'];
                    $update_Course->Course_Price = $req['cprice'];
                    $update_Course->Teacher_id = $req['tid'];
                    $update_Course->Course_Time = $req['ctime'];
                    $imageName = time() . '.' . $request->image->extension();
                    $update_Course->Course_Img = $imageName;
                    $update_Course->Course_Duration = $req['cduration'];

                    $update_Course->save();
                    return back()->with('addcourse', 'course sucessfully updated');
                }
            } else {
                return back()->with('courseerror', 'Course  not found');
            }
        }
    }
    public function teacherdetail($id)
    {
        $teacher = Teacher_Register_Data::where('Teacher_id', $id)->first();
        return view('AdminView.teacherdetail', compact('teacher'));

    }
    public function Change_Status($id)
    {
        $Teacher = Teacher_Register_Data::where('Teacher_id', $id)->first();
        if ($Teacher->status == 'not approved') {
            $Teacher->status = 'approved';
        } else {
            $Teacher->status = 'not approved';
        }
        $Teacher->save();
        return back()->with('changestatus', 'Status changed successfully');
    }
function studentdetail($id)
{
    $student = Student_Register::where('student_id', $id)->first();
    return view('AdminView.student-detail', compact('student'));
}
function Notifications()
{
    $notifications = Notification::orderBy('id','desc')->get();
    return view('AdminView.notifications', compact('notifications'));

}


}
