<?php namespace App\Controllers;

class PageController extends BaseController
{
	public function index()
	{
		//index method
	}

	public function show_login(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Login'])
		];
		return view('auth-login', $data);
	}

	public function show_login_2(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Login 2'])
		];
		return view('auth-login-2', $data);
	}

	public function show_register(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Register'])
		];
		return view('auth-register', $data);
	}

	public function show_register_2(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Register 2'])
		];
		return view('auth-register-2', $data);
	}

	public function show_auth_recoverpw(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Recover Password'])
		];
		return view('auth-recoverpw', $data);
	}
	
	public function show_auth_recoverpw_2(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Recover Password 2'])
		];
		return view('auth-recoverpw-2', $data);
	}

	public function show_auth_lock_screen(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lock Screen'])
		];
		return view('auth-lock-screen', $data);
	}

	public function show_auth_lock_screen_2(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lock Screen 2'])
		];
		return view('auth-lock-screen-2', $data);
	}

	public function show_auth_confirm_mail(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Confirm Mail'])
		];
		return view('auth-confirm-mail', $data);
	}

	public function show_auth_confirm_mail_2(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Confirm Mail 2'])
		];
		return view('auth-confirm-mail-2', $data);
	}

	public function show_auth_email_verification(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Email Verification'])
		];
		return view('auth-email-verification', $data);
	}

	public function show_auth_email_verification_2(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Email Verification 2'])
		];
		return view('auth-email-verification-2', $data);
	}

	public function show_auth_two_step_verification(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Two Step Verification'])
		];
		return view('auth-two-step-verification', $data);
	}

	public function show_auth_two_step_verification_2(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Two Step Verification 2'])
		];
		return view('auth-two-step-verification-2', $data);
	}

	public function show_pages_starter(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Starter Page']),
			'page_title' => view('partials/page-title', ['title' => 'Starter Page', 'pagetitle' => 'Utility'])
		];
		return view('pages-starter', $data);
	}

	public function show_pages_maintenance(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Maintenance Page'])
		];
		return view('pages-maintenance', $data);
	}

	public function show_pages_main(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => '가상공작기계'])
		];
		return view('pages-main', $data);
	}	

	public function show_pages_product(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Product'])
		];
		return view('pages-product', $data);
	}		

	public function show_pages_manual(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Manual'])
		];
		return view('pages-manual', $data);
	}		

	public function show_pages_download(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Manual'])
		];
		return view('pages-download', $data);
	}		

	public function show_pages_qa(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Q&A'])
		];
		return view('pages-qa', $data);
	}	

	public function show_pages_qa_details(){
		// $result = $this->db->query('SELECT * FROM notice')->result();
		// $db = \Config\Database::connect();
		// $result = $db->query('SELECT * FROM notice')->result();

		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Q&A']),
			// 'result' => $result
		];
		return view('pages-qa-details', $data);
	}		

	public function show_pages_qa_write(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Q&A'])
		];
		return view('pages-qa-write', $data);
	}	

	public function show_pages_qa_update(){
		echo $this->request->getVar('fomr_title');
	}		

	public function show_pages_comingsoon(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Coming Soon'])
		];
		return view('pages-comingsoon', $data);
	}

	public function show_pages_timeline(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Timeline']),
			'page_title' => view('partials/page-title', ['title' => 'Timeline', 'pagetitle' => 'Utility'])
		];
		return view('pages-timeline', $data);
	}

	public function show_pages_faqs(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'FAQs']),
			'page_title' => view('partials/page-title', ['title' => 'FAQs', 'pagetitle' => 'Utility'])
		];
		return view('pages-faqs', $data);
	}

	public function show_pages_pricing(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Pricing']),
			'page_title' => view('partials/page-title', ['title' => 'Pricing', 'pagetitle' => 'Utility'])
		];
		return view('pages-pricing', $data);
	}

	public function show_pages_404(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => '404 Error Page'])
		];
		return view('pages-404', $data);
	}

	public function show_pages_500(){
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => '500 Error Page'])
		];
		return view('pages-500', $data);
	}

	//--------------------------------------------------------------------

}
