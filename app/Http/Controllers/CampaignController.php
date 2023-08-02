<?php

namespace App\Http\Controllers;

use App\Models\CampaignMail;
use App\Models\Customer;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function CampaignListPage(Request $request)
    {
        $user_id = $request->header('id');
        $customers      = Customer::where('user_id', $user_id)->get();
        return view('pages.dashboard.campaign-page',[
            'customers' => $customers
        ]);
    }

    public function CampaignList (Request $request)
    {
        $user_id = $request->header('id');

        return CampaignMail::where('user_id', $user_id)->get();
    }

    public function CampaignCreate(Request $request)
    {
        
        ///return $request->input();
        $user_id = $request->header('id');
       
        return CampaignMail::create([
            'campaign_name' => $request->input('campaignName'),
            'campaign_mail_subject' => $request->input('campaignEmailSubject'),
            'campaign_mail_content' => $request->input('campaignEmailContent'),
            'user_id' => $user_id,
            'targeted_customers_ids'=> json_encode($request->input('selectedCustomers'))
        ]);
    }
}
