<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TreeController extends Controller
{
    /**
     * Display user's downline tree.
     */
    public function show()
    {
        return view('user.tree');
    }

    /**
     * Count total downline members.
     */
    private function countDownline($user)
    {
        $children = User::where('parent_id', $user->id)->get();
        $count = $children->count();

        foreach ($children as $child) {
            $count += $this->countDownline($child);
        }

        return $count;
    }

    /**
     * Get downline tree with structure.
     */
    private function getDownlineTree($user, $level = 0)
    {
        $children = User::where('parent_id', $user->id)->get();
        $tree = [];

        foreach ($children as $child) {
            $tree[] = [
                'user' => $child,
                'level' => $level,
                'position' => $child->position,
                'children' => $this->getDownlineTree($child, $level + 1),
            ];
        }

        return $tree;
    }
}
