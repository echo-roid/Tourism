<?php

namespace App\Http\Controllers;

use App\Models\Codition;
use App\Models\Company;
use App\Models\FormBuilder;
use App\Models\ProjectContacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['companies'] = Company::get();
        $data['contacts'] = ProjectContacts::select('id', DB::raw("CONCAT(title, ' ', name) as name"))->get();
        return view('home', $data);
    }

    public function form($id)
    {
        // return $id;
        $formUN = random_int(100000, 999999);
        return view('form', compact('id', 'formUN'));
    }

    public function formList()
    {
        $data['forms'] = FormBuilder::get();
        return view('form_list', $data);
    }

    public function createform(Request $request)
    {
        //getting condition id from coditions table
        // $conditionId = Codition::latest()->first('id');

        // return $request;
        $validatedData = $request->validate([

            'form_title' => 'required',
            'form_un' => 'required',

        ], [

            'form_title.required' => 'Form Title Field is Required!',

        ]);
        $project_id = $request->project_id;
        $form_title = $request->form_title;
        $form_un = $request->form_un;
        $formDetails = $request->except(['_token', 'project_id', 'form_title','form_un']);

        $formBuilder = new FormBuilder();
        // if($formBuilder->form_title){
        //     $formBuilder->form_title = $request->form_title;
        //     $formBuilder->save();
        // }

        $formBuilder->form_title = $form_title;

        $formBuilder->project_id = $project_id;
        $formBuilder->formUN = $form_un;
        $formBuilder->form_details_field = json_encode($formDetails);
        $formBuilder->save();
        return redirect('form-list');
    }
    //
    public function saveHideShowForm(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'ifField' => 'required',
            'ifState' => 'required',
            'doField' => 'required',
            'doState' => 'required',
        ]);
        // return $request;
        // Store the form data (example: to the database)
        try {

            $data = new Codition();
            $data->if = $request->ifField;
            $data->state = $request->ifState;
            $data->do = $request->doField;
            $data->field = $request->doState;
            $data->formUn = $request->formUN;
            $data->save();

            return response()->json(['success' => true, 'message' => 'Form saved successfully!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error saving form: ' . $e->getMessage()], 500);
        }
    }

    public function enableRequireMaskField(Request $request)
    {
        // return $request;
        // Validate the incoming data
        $request->validate([
            'enableIfField' => 'required',
            'enableIfState' => 'required',
            'enableDoField' => 'required',
            'enableDoState' => 'required',
        ]);
        // return $request;
        // Store the form data (example: to the database)
        try {

            $data = new Codition();
            $data->if = $request->enableIfField;
            $data->state = $request->enableIfState;
            $data->do = $request->enableDoField;
            $data->field = $request->enableDoState;
            $data->formUn = $request->formUN;
            $data->save();

            return response()->json(['success' => true, 'message' => 'Form saved successfully!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error saving form: ' . $e->getMessage()], 500);
        }
    }



}
