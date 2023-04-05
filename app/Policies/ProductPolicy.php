<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    /**
     * Create a new policy instance.
     */
    use HandlesAuthorization;
    public function __construct()
    {
        //
    }
    public function update(User $user, Product $product) {
        return $product->user->id === $user->id;
    }

    public function destroy(User $user, Product $product) {
        return $this->update($user, $product);
    }
}
