<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignMail extends Model
{
    use HasFactory;
    protected $fillable = [
        'campaign_name',
        'campaign_mail_subject',
        'campaign_mail_content',
        'targeted_customers_ids',
        'user_id'
    ];
}
