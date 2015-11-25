<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Salary;
use App\Subordination;

class SiteController extends Controller
{
    /**
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param User $modelUser
     * @param Salary $modelSalary
     * @param Subordination $modelSub
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(User $modelUser, Salary $modelSalary, Subordination $modelSub)
    {
        $users = $modelUser->getUsers();
        if ($this->request->ajax() && $this->request->has('id'))
        {
            $id = $this->request->get('id');
            $salary = $modelSalary->getSalary($id);
            $average = $modelSalary->getAverage($id);
            return response()->json(view('inc_payment_report', ['salary' => $salary, 'average' => $average])->render());
        }
        if ($this->request->ajax() && $this->request->has('subordination'))
        {
            $people = $modelSub->getSubordinate($this->request->get('subordination'));
            return response()->json(view('inc_subordination_report', ['people' => $people])->render());
        }
        return view('welcome', ['users' => $users]);
    }
}
