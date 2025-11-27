<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BonusPercentage extends Model
{
    use HasFactory;

    protected $fillable = ['plan_id', 'percent'];
    
    public static function getPercentByPlanId($planId)
    {
        return self::where('plan_id', $planId)->value('percent');
    }
    // Relationship: each bonus belongs to a plan
    public function plan()
    {
        return $this->belongsTo(Plans::class);
    }
    
}
