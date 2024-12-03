<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;
use App\Models\ProjectContacts;
use App\Models\ProjectRfq;
use Illuminate\Http\Request;

class AjaxController extends Controller
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

    public function getContactPerson(){
        $data = [
            'contacts' => ProjectContacts::pluck('name', 'id'),
            'status' => 'success'
        ];
        return response()->json($data);
    }

    public function createContactPerson(Request $request){
        try {
          
            if(!empty($request->input('title')) && !empty($request->input('name')) && !empty($request->input('email')) && !empty($request->input('contact_number'))){
                $contactProject = new ProjectContacts();
                $contactProject->title =  $request->input('title');
                $contactProject->name =  $request->input('name');
                $contactProject->email =  $request->input('email');
                $contactProject->contact_number =  $request->input('contact_number');
                $contactProject->save();
                $response = [
                    'status' => true,
                    'message' => 'Contact created successfully!',
                    'data' => [$contactProject],
                ];
            }
            else{
                $response = [
                    'status' => false,
                    'message' => "fill all the required filds",
                    'data' => [],
                ];
            }
        } 
        catch (ValidationException $e) {
            $response = [
                'status' => false,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }

        return response()->json($response);
    }
    
    public function projectStatusUpdate(Request $request){
        try {
            if(!empty($request->input('project_id'))){
                $project = ProjectRfq::where('id', $request->input('project_id'))->first();
                $project->status = $request->input('status');
                $project->save();
                $response = [
                    'status' => true,
                    'message' => 'status updated successfully!',
                    'data' => [$project],
                ];
            }
            else{
                $response = [
                    'status' => false,
                    'message' => "fill all the required filds",
                    'data' => [],
                ];
            }
        } 
        catch (ValidationException $e) {
            $response = [
                'status' => false,
                'message' => $e->getMessage(),
                'data' => [],
            ];
        }

        return response()->json($response);
    }
}
