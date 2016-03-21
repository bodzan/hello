<?php
namespace Bradovanovic\Hello\Http\Controllers\Frontend;

//use App\Http\Controllers\Controller;
use Synergy\Platform\Http\Controllers\Controller;
use Synergy\Users\Repositories\UserRepositoryInterface;

class HelloController extends Controller
{ 
    protected $users;
    
    /**
     * Creates a new instance of the User controller.
     *
     * @param \Synergy\Users\Repositories\UserRepositoryInterface $users
     */
    public function __construct(UserRepositoryInterface $users)
    {
        parent::__construct();
        $this->users = $users;
    }
    
    public function index()
    {        
        return view('bradovanovic/hello::index');
    }
    
    
}


