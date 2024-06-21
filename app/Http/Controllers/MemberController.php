<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Member;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    // Displaying the registration form
    public function register()
    {
        return view('members.registermembers');
    }
    public function show($id)
    {
        $member = Member::find($id);

        return view('members.show', compact('member'));
    }

    // Storing the registered member
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'businesstype' => 'required',
            'businessyear' => 'required',
            'goodslist' => 'required',
            'workingcapital' => 'required',
            'weeklyprofit' => 'required',
            'monthlyexpense' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'businesstype.required' => 'The business type field is required.',
            'businessyear.required' => 'The business year field is required.',
            'goodslist.required' => 'The goods list field is required.',
            'workingcapital.required' => 'The working capital field is required.',
            'weeklyprofit.required' => 'The weekly profit field is required.',
            'monthlyexpense.required' => 'The monthly expense field is required.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        Member::create([
            'name' => $request->name,
            'businesstype' => $request->businesstype,
            'businessyear' => $request->businessyear,
            'goodslist' => $request->goodslist,
            'workingcapital' => $request->workingcapital,
            'weeklyprofit' => $request->weeklyprofit,
            'monthlyexpense' => $request->monthlyexpense,
        ]);

        return back()->with('success', 'Member has been registered successfully');
    }


    public function view()
    {
        $members = Member::all();
        return view('members.viewmembers', compact('members'));
    }
    public function edit($id)
    {
        $member = Member::findOrFail($id);

        return view('members.editmembers', compact('member'));
    }
    public function update(Request $request, $id)
    {
        // Validation rules for the update form
        $rules = [
            'name' => 'required|string|max:255',
            'businesstype' => 'required|string|max:255',
            'businessyear' => 'required|integer',
            'goodslist' => 'nullable|string',
            'workingcapital' => 'nullable|numeric',
            'weeklyprofit' => 'nullable|numeric',
            'monthlyexpense' => 'nullable|numeric',
        ];

        $this->validate($request, $rules);

        $member = Member::findOrFail($id);

        // Update the member data based on the form input
        $member->update([
            'name' => $request->name,
            'businesstype' => $request->businesstype,
            'businessyear' => $request->businessyear,
            'goodslist' => $request->goodslist,
            'workingcapital' => $request->workingcapital,
            'weeklyprofit' => $request->weeklyprofit,
            'monthlyexpense' => $request->monthlyexpense,
        ]);

        return redirect()->route('admin.viewmembers')->with('success', 'Member updated successfully');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();


        return redirect()->route('admin.viewmembers')->with('success', 'Member deleted successfully');
    }

    public function generatePDF($id)
    {
        $member = Member::findOrFail($id);

        $pdf = FacadePdf::loadView('pdf.member_details', compact('member'));

        return $pdf->download('member_details_' . $member->name . '.pdf');
    }
}
