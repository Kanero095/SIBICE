<?php

namespace App\Actions\Jetstream;

use App\Models\User;
use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     */
    public function delete(User $user): void
    {
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}

            // @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            //     <x-section-border />

            //     <div class="mt-10 sm:mt-0">
            //         @livewire('profile.delete-user-form')
            //     </div>
            // @endif
