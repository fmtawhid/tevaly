<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'referral_code',
        'sponsor_id',
        'parent_id',
        'position',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // যিনি মূলত এই নতুন মেম্বারকে সিস্টেমে এনেছেন (Sponsor)
    public function sponsor()
    {
        return $this->belongsTo(User::class, 'sponsor_id');
    }

    // ট্রিতে যার ঠিক নিচে এই ইউজার বসেছে (Up-line/Parent)
    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    // এই ইউজারের ঠিক নিচে যারা বসেছে (Max 2 for Binary - Left & Right)
    public function children()
    {
        return $this->hasMany(User::class, 'parent_id');
    }

    /**
     * Count total downline members recursively.
     */
    public function countDownline()
    {
        $count = $this->children()->count();
        foreach ($this->children as $child) {
            $count += $child->countDownline();
        }
        return $count;
    }

    /**
     * Get all downline users (flattened).
     */
    public function getDownlineUsers()
    {
        $downline = $this->children;
        foreach ($this->children as $child) {
            $downline = $downline->merge($child->getDownlineUsers());
        }
        return $downline;
    }

    /**
     * Get direct referrals (left & right children).
     */
    public function getDirectReferrals()
    {
        return $this->children()->get();
    }
}