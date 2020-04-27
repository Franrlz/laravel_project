<?php

namespace App\Observers;

use App\tbl_insert;

class InsertObserver
{
    /**
     * Handle the tbl_insert "created" event.
     *
     * @param  \App\tbl_insert  $tblInsert
     * @return void
     */

    public function creating(tbl_insert $tblInsert)
    {
        if($tblInsert-> $id % 2 == 0){
            $tblInsert -> $name  = $tblInsert -> $name + "par";
        }
    }
     
    public function created(tbl_insert $tblInsert)
    {
        //
    }

    /**
     * Handle the tbl_insert "updated" event.
     *
     * @param  \App\tbl_insert  $tblInsert
     * @return void
     */
    public function updated(tbl_insert $tblInsert)
    {
        //
    }

    /**
     * Handle the tbl_insert "deleted" event.
     *
     * @param  \App\tbl_insert  $tblInsert
     * @return void
     */
    public function deleted(tbl_insert $tblInsert)
    {
        //
    }

    /**
     * Handle the tbl_insert "restored" event.
     *
     * @param  \App\tbl_insert  $tblInsert
     * @return void
     */
    public function restored(tbl_insert $tblInsert)
    {
        //
    }

    /**
     * Handle the tbl_insert "force deleted" event.
     *
     * @param  \App\tbl_insert  $tblInsert
     * @return void
     */
    public function forceDeleted(tbl_insert $tblInsert)
    {
        //
    }
}
