<?php

namespace App\Models;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Subject extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'subjects';

    const STATUS_SELECT = [
        '1' => 'Approved',
        '2' => 'Pending',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const PURPOSE_SELECT = [
        '1' => 'للمناقشة',
        '2' => 'للتنفيذ',
        '3' => 'للاحالة',
    ];

    const CATEGORY_SELECT = [
        '1' => 'التصنيف ١',
        '2' => 'التصنيف ٢',
        '3' => 'التصنيف ٣',
    ];

    const DEPARTMENT_SELECT = [
        'dep1' => 'الادارة العامة 1',
        'dep2' => 'الادارة العامة 2',
        'dep3' => 'الادارة العامة 3',
    ];

    protected $fillable = [
        'title',
        'department',
        'purpose',
        'category',
        'is_it_urgent',
        'description',
        'is_it_board_powers',
        'is_it_board_powers_text',
        'is_it_related',
        'is_it_financial_related',
        'is_it_market_effect',
        'is_it_edit_related',
        'is_it_decision_related',
        'is_it_public',
        'is_it_related_to_old_subject',
        'time',
        'is_it_department_related',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
