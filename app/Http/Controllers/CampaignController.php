<?php

namespace App\Http\Controllers;

use App\Mail\CampaignMail as CampaignMaler;
use App\Models\CampaignMail;
use App\Models\Customer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class CampaignController extends Controller {
	public function CampaignListPage(Request $request) {
		$user_id   = $request->header('id');
		$customers = Customer::where('user_id', $user_id)->get();

		return view('pages.dashboard.campaign-page', [
			'customers' => $customers,
		]);
	}

	public function CampaignList (Request $request) {
		$user_id = $request->header('id');

		return CampaignMail::where('user_id', $user_id)->get();
	}

	public function CampaignCreate(Request $request) {
		$user_id = $request->header('id');

		try {
			CampaignMail::create([
				'campaign_name'          => $request->input('campaignName'),
				'campaign_mail_subject'  => $request->input('campaignEmailSubject'),
				'campaign_mail_content'  => $request->input('campaignEmailContent'),
				'user_id'                => $user_id,
				'targeted_customers_ids' => json_encode($request->input('selectedCustomers')),
			]);

			foreach ($request->input('selectedCustomers') as $customer_id) {
				$customer = Customer::find($customer_id);
				Mail::to($customer->email)->send(new CampaignMaler($request->input('campaignEmailSubject'), $request->input('campaignEmailContent')));
			}
		} catch (Exception $e) {

            return response()->json(['status' => 'failed','message'=> $e->getMessage()], 500);
		}


        return response()->json(['status' => 'success'], 200);
	}

	public function CampaignDelete(Request $request) {
		$campaign_id = $request->input('id');
		$user_id     = $request->header('id');

		return CampaignMail::where('id', $campaign_id)->where('user_id', $user_id)->delete();
	}
}
