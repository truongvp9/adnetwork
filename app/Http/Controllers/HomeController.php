<?php
 
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Client;
use App\Banner;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('home');
    }
	
	public function admin()
    {   
        return view('app');
    }
	
	public function report()
    {   
		$json = file_get_contents("http://api.adserver.local/get");
		$array = json_decode($json);
		/*
		foreach ($array as $key => $value) {
			var_dump($value->clicks);
		}*/
		$data['item'] = $array;
        return view('report',$data);
    }
    
    public function addnewads(Request $request) {
        $input = $request->all();
        if (isset($_POST['cmd'])) {
            $create = Client::create($input);
        }
        return view("form.test");        
    }
    
    public function newads(Request $request) {        
        $input = $request->all(); 
        $data = array();
		$user = Auth::User();     
        $userId = $user->id;
        //print_r($input); die;
        $result = '';
        if (isset($_POST['cmd'])) {
            $data['target_'] = $input['target_'];
            $data['image_'] = $input['image'];
            $data['price'] = $input['price'];
            $data['name'] = $input['title'];
			$data['userid'] = $userId;
            $create = Banner::create($data);
            //print_r($input); die;
            //$result = $this->processads($data);
            //print_r($result); die;
        }
        return view("form.postads");  
    }
    
    public function processads($data) {
    
        $data_string = json_encode($data);                                                                                                                                                                                                  
        $ch = curl_init('http://10.12.11.161:5000/getAds');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data_string))                                                                       
        );                                                                                                                   

        $result = curl_exec($ch); 
        return $result;
    }
}

