<?php

namespace App\Actions\Jetstream;

use App\Models\Paciente;
use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete($user)
    {
        $paciente = Paciente::findOrFail($user->id);
        // dd($paciente);
        // $paciente = Paciente::where('user_id', $user->id)->get();
        $paciente->delete();
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}
