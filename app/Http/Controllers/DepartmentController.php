<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Show the form to add a department.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function indexDepartment()
    {
        return view('department.add-department');
    }

    /**
     * Show the form to edit a department.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editDepartment()
    {
        return view('department.edit-department');
    }

    /**
     * Show the list of departments.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listDepartment()
    {
        return view('department.list-department');
    }
}
