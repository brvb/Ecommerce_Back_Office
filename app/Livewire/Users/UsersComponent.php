<?php

namespace App\Livewire\Users;

use App\Models\Users;
use App\Models\Category;


use Livewire\Component;

class UsersComponent extends Component
{
    public function render()
    {
        //dd("LIVEWIRE RENDER");
        $users = Users::all();

        return view('livewire.users.users-component', compact('users'));
    }
}
