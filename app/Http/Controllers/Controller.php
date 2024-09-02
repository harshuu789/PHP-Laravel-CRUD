<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends Basecontroller
{
    public function showForm() {
        return view('loanForm');
    }
    
    public function createLoan(Request $request) {
        $loan = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'amount' => 'required|numeric|min:1',
        ]);
    
        User::create($loan);
    
        return redirect('/loanForm')->with('status', 'Loan request submitted!');
    }

    public function showLoan(){

        $users=User::all();
        return view('showLoan',compact('users'));
    }
    public function deleteLoan($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back();
    }
    public function editForm($id)
    {
        $user = User::findOrFail($id);
        return view('editForm', compact('user'));
    }
    public function updateUserLoan(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'amount' => 'required|numeric|min:1'
    ]);

    $user = User::findOrFail($id);
    $success = $user->update($request->only('name', 'email', 'amount'));

    return response()->json(['message' => $success ? 'User updated successfully' : 'Failed to update'], $success ? 200 : 500);
}

    
}
