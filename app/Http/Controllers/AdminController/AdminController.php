<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display admin dashboard.
     */
    public function dashboard(): View
    {
        return view('admin.dashboard');
    }

    /**
     * Display all users.
     */
    public function users(): View
    {
        $role = request('role');
        
        $query = User::query();
        
        if ($role) {
            $query->where('role', $role);
        }
        
        $users = $query->paginate(50);
        
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Display network tree.
     */
    public function tree(): View
    {
        $root = User::find(1);
        
        return view('admin.tree', ['root' => $root]);
    }

    /**
     * Get tree depth (for stats).
     */
    private function getTreeDepth($user, $depth = 0)
    {
        if ($user->children()->count() === 0) {
            return $depth;
        }

        $maxDepth = $depth;
        foreach ($user->children as $child) {
            $childDepth = $this->getTreeDepth($child, $depth + 1);
            $maxDepth = max($maxDepth, $childDepth);
        }

        return $maxDepth;
    }
}
