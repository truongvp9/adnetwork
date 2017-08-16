<?php
 
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Client;
use App\Banner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (!empty($_SERVER['HTTP_ORIGIN']) && preg_match('#https?://#', $_SERVER['HTTP_ORIGIN'])) {
            header("Access-Control-Allow-Origin: ".$_SERVER['HTTP_ORIGIN']);
            header("Access-Control-Allow-Credentials: true");
        }
        header("Content-Type: application/json");  
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('app');
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
        //print_r($input); die;
        $result = '';
        if (isset($_POST['cmd'])) {
            $data['description'] = $input['description'];
            $data['image'] = $input['image'];
            $data['price'] = $input['price'];
            $data['title'] = $input['title'];
            //$create = Banner::create($input);
            //print_r($input); die;
            $result = $this->processads($data);
            print_r($result); die;
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
