<?php 

use App\Core\Controller as Controller;
use App\Models\Merchant as MerchantModel;
use App\Helper\Session as Session;
use App\Helper\Input as Input;
use App\Helper\Redirect as Redirect;


class Merchant extends Controller
{
	protected $merchant;

    function __construct() {
        $this->merchant= new MerchantModel;
    }

    public function index()
    {
        if (Session::get('user')){
            
            $merchants = $this->merchant->all();
            $this->view('admin/merchant/index',['merchants'=>$merchants]);
        
        }else{
            echo "harus login dulu";
        }
    }

    public function store()
    {
        if (Session::get('user')){
            
            $this->merchant->create([
                'name'    => Input::get('name'),
                'address' => Input::get('address'),
                'hp'   => Input::get('phone'),
            ]);

            return Redirect::to('admin/merchant/index');

        }   

    }

    public function delete($id)
    {
       $this->merchant->find($id)
                      ->delete();
                      
        return Redirect::to('admin/merchant/index');
    }

}