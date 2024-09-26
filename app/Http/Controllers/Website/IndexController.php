<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Journal;
use App\Models\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class IndexController extends Controller
{
    public function index() {
        $reserch = Research::orderBy("id", "DESC")->first();
        $journal =  Journal::orderBy("id", "DESC")->get();
        return view("website.index",compact('reserch','journal') );
    }

    public function profile() {
        return view("website.profile");
    }

    public function aboutUs() {
        return view("website.aboutus");
    }


    public function research() {
        return view("website.research", [
            'researchs' => Research::orderBy("id", "DESC")->get()
        ]);
    } 

    public function singleresearch($slug) {
        $research = Research::where('slug', $slug)->firstOrFail();
        $otherResearches = Research::where('id', '!=', $research->id)->orderBy('id', 'DESC')->get();
        return view('website.single-research', compact('research','otherResearches'));
    }
    public function cancerTherapy() {
        return view("website.cancer-therapy");
    }
    public function feesStructure() {
        return view("website.fees-structure");
    }
    public function commingSoon() {
        return view("website.commingsoon");
    }
    public function journal() {
        return view("website.journal", [
            'journal' => Journal::orderBy("id", "DESC")->get()
        ]);
       
    }
    public function singlejurnal($slug) {
        $journal = Journal::where('slug', $slug)->firstOrFail();
        return view('website.single-journal', compact('journal'));
    }
  

    public function contact() {
        return view("website.contact");
    }
    public function course() {
        return view("website.course", [
            'courses' => Course::orderBy("id", "DESC")->get()
        ]);
    }
    public function singlecourse($slug) {
        $course = Course::where('slug', $slug)->firstOrFail();
        return view('website.single-course', compact('course'));
    }
    public function sendMailCourse(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'course_title' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'form_Phone' => 'required|string',
            'form_Email' => 'required|email',
            'form_message' => 'required|string',
            'fileToUpload' => 'required|mimes:pdf,doc,docx|max:2048', // Adjust file types as needed
        ]);

        // Get form data
        $data = $request->all();

        // Handle file upload
        if ($request->hasFile('fileToUpload')) {
            $file = $request->file('fileToUpload');
            $cvPath = $file->store('uploads/cvs', 'public');  // Store the CV file in the 'public/uploads/cvs' directory
            $data['cv_path'] = $cvPath;
        }

        // Prepare the email content in plain text
        $emailContent = "
        New Job Application Received:\n
        Apply Course: {$data['course_title']}\n
        First Name: {$data['first_name']}\n
        Last Name: {$data['last_name']}\n
        Phone: {$data['form_Phone']}\n
        Email: {$data['form_Email']}\n
        Message: {$data['form_message']}
        ";

        // Send email in plain text
        Mail::raw($emailContent, function ($message) use ($data) {
            $message->to('admin@mail.com')
                ->subject('New Job Application from ' . $data['first_name'] . ' ' . $data['last_name'])
                ->attach(storage_path('app/public/' . $data['cv_path']));  // Attach the CV
        });

        return back()->with('success', 'Your application has been sent successfully!');
    }
}

