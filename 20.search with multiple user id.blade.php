Search with multiple user id from same page with laravel
==================================================================================================================================


==================================================================================================================================
1. route
==================================================================================================================================
Route::get('hrm/hrm-card','Hrm\HrmInformationController@card')->name('hrmcard');




==================================================================================================================================
2. controller
==================================================================================================================================
public function card(Employee $employee){

        $emp = $employee->newQuery();

        if(Input::has('employee_no') && Input::get('employee_no') != null) {
            $employeesId = Input::get('employee_no');

            $employees = explode(",", $employeesId);

            //dd($employees);
            //dd($employee); 133782,109537,68862,27687

            $emp->whereIn('employee_no',$employees);

        }

        $employees = $emp->get();

        return view('hrm.card.hrm-idcard',compact('employees'));

    }
	
	
==================================================================================================================================
3.blade/view page
==================================================================================================================================
foreach $employees variable and then echo as usual