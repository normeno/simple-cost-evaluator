<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use SoftDeletes;

use DB;

class Budget extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'budgets';

  	protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tax', 'weeks', 'days', 'hours', 'hours_cost', 'executive', 'executive_total', 'project_manager_total', 'project_manager', 'designer_total', 'designer', 'programmer_total', 'programmer', 'rent', 'light', 'phone', 'mobile', 'internet', 'water', 'software', 'travel', 'audiovisual'
    ];

    public static function salaryMonth($id, $column)
    {
        $query = Budget::select(DB::raw($column . '_total * ' . $column .' as month_salary'))
        			->where('id', $id)
        			->first();

        return $query->month_salary;
    }

    public static function getSalariesMonth($id)
    {
    	$query = Budget::select(DB::raw('(executive * executive_total) + (project_manager * project_manager_total) + (designer * designer_total) + (programmer * programmer_total) as salaries_month'))
        			->where('id', $id)
        			->first();

        return $query->salaries_month;
    }

    public static function getVariableCosts($id)
    {
    	$query = Budget::select(DB::raw('software + travel + audiovisual as variable_costs'))
        			->where('id', $id)
        			->first();

        return $query->variable_costs;
    }

	public static function getWorkedDays($id)
    {
    	$query = Budget::select(DB::raw('weeks * days as worked_days'))
        			->where('id', $id)
        			->first();

        return $query->worked_days;
    }

    public static function getWorkHours($id)
    {
    	$query = Budget::select(DB::raw(Budget::getWorkedDays($id) . '* hours as work_hours'))
        			->where('id', $id)
        			->first();

        return $query->work_hours;
    }

    public static function getOperativeCosts($id)
    {
    	$query = Budget::select(DB::raw('rent + light + phone + mobile + internet + water as operative_costs'))
        			->where('id', $id)
        			->first();

        return $query->operative_costs;
    }

    public static function getTotalWithoutTax($id)
    {var_dump(Budget::getVariableCosts($id));
    	$query = Budget::select(DB::raw('(hours_cost * '.Budget::getWorkHours($id).') + ' . Budget::getVariableCosts($id) . ' as variable_costs'))
        			->where('id', $id)
        			->first();

        return $query->variable_costs;
    }
}
