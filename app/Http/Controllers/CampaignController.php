<?php

namespace App\Http\Controllers;

use App\Models\CampaignMail;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function CampaignListPage()
    {
        return view('pages.dashboard.campaign-page');
    }

    public function CampaignList (Request $request)
    {
        $user_id = $request->header('id');

        return CampaignMail::where('user_id', $user_id)->get();
    }
}
