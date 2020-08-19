<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new User();
        $this->view = 'admin.users.';
        $this->redirect = '/admin/users';
    }

    public function index()
    {
        $this->authorize('viewAny', $this->model);

        $datas = $this->model->paginate(10);
        return view($this->view . 'index', compact('datas'));
    }

    public function show($id)
    {

        $data = $this->model->find($id);

        $this->authorize('view', $data);

        return view($this->view . 'show', compact('data'));
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        $this->authorize('update', $data);

        return view($this->view . 'edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->model->find($id);

        $this->authorize('update', $data);

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,name,' . $id,
            'password' => 'required',
        ]);

        $request->merge([
            'password' => $encrypted,
        ]);

        $data->name = $request->name;
        $data->save();

        return redirect($this->redirect);
    }

    public function delete($id)
    {
        $data = $this->model->find($id);

        $this->authorize('delete', $data);

        Auth::logout();

        $data->delete();

        if (Auth::user()->role == 'admin') {
            return redirect($this->redirect);
        } else {
            return redirect('/admin/login');
        }

    }
}
