<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyContractUser;
use App\Models\Conversation;
use App\Models\Guest;
use App\Models\ProjectActivity;
use App\Models\ProjectContacts;
use App\Models\ProjectRfq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class RfqProjectController extends Controller
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
        $data['contacts'] = ProjectContacts::select('id', DB::raw("CONCAT(title, ' ', name) as name"))->get();
        $data['companies'] = Company::get();
        return view('home', $data);
    }

    public function create(Request $request)
    {
        //dd($request);
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'website' => 'required|string|max:255',
                'contact_number' => 'required|string|max:255',
                'contact_person' => 'required',
                'relation_manager' => 'required',
                // 'business_type' => 'required',
                'client_type' => 'required',
                'contact_person' => 'required',
                'relation_manager' => 'required',
                'industry_type' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'cin_number' => 'required|max:20',
                'gst_number' => 'required|max:20',
                'pan_number' => 'required|max:20',
                'state' => 'required|max:20',
                'pin_code' => 'required|numeric|digits_between:1,6',
            ]);
            // Your code to handle the validated data

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $company = new Company();
            $company->name = $request->name;
            $company->website = $request->website;
            $company->contact_number = $request->contact_number;
            $company->email = $request->email;
            $company->contracts = 100;
            $company->contact_person = $request->contact_person;
            $company->relation_manager = $request->relation_manager;
            $company->client_type = $request->client_type;
            $company->contact_person = $request->contact_person;
            $company->relation_manager = $request->relation_manager;
            $company->industry_type = $request->industry_type;
            $company->address = $request->address;
            $company->cin_number = $request->cin_number;
            $company->gst_number = $request->gst_number;
            $company->pan_number = $request->pan_number;
            $company->state = $request->state;
            $company->pin_code = $request->pin_code;

            $company->save();

            return redirect()->route('home')->with('success', 'Company added successfully!');
            // Your logic here
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        }
    }

    public function contract($companyId)
    {
        // $data['contract'] = CompanyContract::where('company_id',$companyId)->get();
        // $data['contract'] = ProjectRfq::where('company_id',$companyId)->get();

        $data['contract'] = DB::table('project_rfq')
            ->leftJoin('project_contacts', 'project_rfq.contact_person', '=', 'project_contacts.id')
            ->leftJoin('project_contacts as sales', 'project_rfq.sales_person', '=', 'sales.id')
            ->select('project_rfq.*', 'project_contacts.name as contactPerson', 'sales.name as salesPerson')
            ->where('company_id', $companyId)->get();

        $data['companyDetails'] = Company::where('id', $companyId)->first();
        $data['contacts'] = ProjectContacts::select('id', DB::raw("CONCAT(title, ' ', name) as name"))->get();
        return view('company.company_rfq', $data);
    }

    public function contractTeam($companyId, $contractId)
    {
        $data['companyId'] = $companyId;
        $data['contractUser'] = CompanyContractUser::where('company_id', $companyId)->where('contract_id', $contractId)->get();

        return view('company.contract_team', $data);
    }

    public function project(Request $request)
    {
        $data['projects'] = ProjectRfq::orderBy('id', 'DESC')->paginate(15);
        $data['contacts'] = ProjectContacts::select('id', DB::raw("CONCAT(title, ' ', name) as name"))->get();
        $data['company'] = Company::get();
        return view('company.rfqproject', compact('data'))->with('i', ($request->input('page', 1) - 1) * 15);
    }

    public function createProject(Request $request)
    {
        try {
            // dd($request);
            $request->validate([
                'name' => 'required|unique:project_rfq,name', 'max:255',
                'project_type' => 'required',
                'num_guest' => 'required',
                'location' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'projectdayes' => 'required',
                'received_date' => 'required',
                // 'contact_person' => 'required',
                'sales_person_id' => 'required',
                // 'sales_person' => 'required',
                'rfq_value' => 'required',
                'company_id' => 'required',
            ]);

            $rfqProject = new ProjectRfq();
            $rfqProject->name = $request->name;
            $rfqProject->project_type = $request->project_type;
            $rfqProject->num_guest = $request->num_guest;
            $rfqProject->location = $request->location;
            $rfqProject->start_date = $request->start_date;
            $rfqProject->end_date = $request->end_date;
            $rfqProject->project_days = $request->projectdayes;
            $rfqProject->recieved_date = $request->received_date;
            $rfqProject->contact_person = $request->contact_person;
            // $rfqProject->sales_person =  $request->sales_person;
            $rfqProject->contact_person = 2;
            $rfqProject->sales_person = $request->sales_person_id;
            $rfqProject->company_id = $request->company_id;
            $rfqProject->rfq_value = $request->rfq_value;

            $rfqProject->save();

            // return redirect()->route('company.project')->with('success', 'Rfq added successfully!');
            return redirect()->back()->with('success', 'Rfq added successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        }
    }

    public function contacts(Request $request)
    {
        $data = ProjectContacts::orderBy('id', 'DESC')->paginate(15);
        return view('company.contacts', compact('data'))->with('i', ($request->input('page', 1) - 1) * 15);
    }

    public function createContacts(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'title' => 'required',
                'email' => 'required',
                'contact_type' => 'required',
                // 'contract_relate' => 'required',
                'profile' => 'required',
                'contact_number' => 'required',
                'additional_number' => 'required',

            ]);

            $contactProject = new ProjectContacts();
            $contactProject->title = $request->title;
            $contactProject->name = $request->name;
            $contactProject->email = $request->email;
            $contactProject->contact_type = $request->contact_type;
            $contactProject->contract_relate = $request->contract_relate;
            $contactProject->profile = $request->profile;
            $contactProject->contact_number = $request->contact_number;
            $contactProject->additional_number = $request->additional_number;

            $contactProject->save();

            return redirect()->route('company.contacts')->with('success', 'Contacts added successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        }
    }

    public function conversation($rfqId, Request $request)
    {
        $data['rfqDetails'] = ProjectRfq::where('id', $rfqId)->first();
        $data['conversation'] = Conversation::get();
        return view('rfqproject.conversation', $data);
        // $data = ProjectContacts::orderBy('id','DESC')->paginate(15);
        // return view('company.conversation',compact('data'))->with('i', ($request->input('page', 1) - 1) * 15);
    }

    public function rfqContacts($rfqId, Request $request)
    {
        $data['rfqDetails'] = ProjectRfq::where('id', $rfqId)->first();
        $data['contact'] = DB::select(DB::raw("SELECT DISTINCT(project_contacts.name),project_contacts.* FROM `project_contacts` INNER JOIN project_rfq ON project_rfq.contact_person = project_contacts.id WHERE project_rfq.id =$rfqId "));
        return view('rfqproject.rfqContacts', $data);
    }

    public function projectActivity($rfqId, Request $request)
    {
        $data['rfqDetails'] = ProjectRfq::where('id', $rfqId)->first();
        $data['projectActivity'] = ProjectActivity::where('rfqId', $rfqId)->get();
        return view('rfqproject.activity', $data);

    }

    public function overview($rfqId, Request $request)
    {
        
        $data['rfqDetails'] = ProjectRfq::where('id', $rfqId)->first();
        // return $data['rfqDetails'];
        return view('rfqproject.overview', $data);
    }

    public function guestlist($rfqId, Request $request)
    {
        $data['rfqDetails'] = ProjectRfq::where('id', $rfqId)->first();
        $data['contacts'] = ProjectContacts::select('id', DB::raw("CONCAT(title, ' ', name) as name"))->get();
        $data['guestlist'] = Guest::where('rfq_id', $rfqId)->get();
        return view('rfqproject.guestlist', $data);
    }

    public function guestcreate(Request $request)
    {
        try {
            $request->validate([
                'rfq_id' => 'required',
                'guest_id' => 'required',
                'name' => 'required|string',
                'gender' => 'required',
                'contact' => 'required|numeric',
                'email' => 'required|email',
                'category' => 'required|string',
                'contact_person_id' => 'required',
                'location' => 'required',
                'state' => 'required|string',
                'resion' => 'required|string',
                'qualified' => 'required|string',
                'status' => 'required',
                // 'support_team' => 'required',

            ]);
            // Your code to handle the validated data

            $guest = new Guest();
            $guest->rfq_id = $request->rfq_id;
            $guest->guest_id = $request->guest_id;
            $guest->name = $request->name;
            $guest->gender = $request->gender;
            $guest->contact = $request->contact;
            $guest->email = $request->email;
            $guest->category = $request->category;
            $guest->contact_person = $request->contact_person_id;
            $guest->location = $request->location;
            $guest->state = $request->state;
            $guest->resion = $request->resion;
            $guest->qualified = $request->qualified;
            $guest->status = $request->status;
            // $guest->support_team = $request->support_team;
            $guest->save();

            return redirect()->back()->with('success', 'Guest added successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        }
    }

    public function files($rfqId, Request $request)
    {
        $data['rfqDetails'] = ProjectRfq::where('id', $rfqId)->first();
        // $data['companyActivity'] = CompanyActivity::where('company_id', $companyId)->get();
        return view('rfqproject.files', $data);
    }

    public function manageProject($rfqId, Request $request)
    {
        $data['rfqDetails'] = ProjectRfq::where('id', $rfqId)->first();
        // return $data['rfqDetails'];
        return view('rfqproject.projectmanage', $data);
    }
}
