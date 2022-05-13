<?php

namespace App\Policies;

use App\Models\HistoryQuantity;
use App\Models\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;

class HistoryQuantitiesPolicy
{
    use HandlesAuthorization;
    public function before($employee, $ability)
    {
        if ($employee->isSuperAdmin()) {
            return true;
        }
    }
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Employee $employee)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\HistoryQuantity  $historyQuantity
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Employee $employee, HistoryQuantity $historyQuantity)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Employee $employee)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HistoryQuantity  $historyQuantity
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Employee $employee, HistoryQuantity $historyQuantity)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HistoryQuantity  $historyQuantity
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Employee $employee, HistoryQuantity $historyQuantity)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\HistoryQuantity  $historyQuantity
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Employee $employee, HistoryQuantity $historyQuantity)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Employee  $employee
     * @param  \App\Models\HistoryQuantity  $historyQuantity
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Employee $employee, HistoryQuantity $historyQuantity)
    {
        //
    }
}
