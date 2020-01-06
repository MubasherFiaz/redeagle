<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientt extends Model
{
      protected $fillable= [
'first_name'  ,
'last_name',
'number',
'address',
'city',
'state',
'zip',
'submit_by',
'submit_id',
'lead_type',
'status',
'house_value',
'mortgage_balance_1',
'interest_rate_1',
'rate_type_1',
'mortgage_balance_2',
'interest_rate_2',
'rate_type_2',
'cashout',
'ltv',
'credit_rating',
'late_payments',
'last_refinance',
'foreclosure',
'employment',
'lo',
'textarea',

];
}
