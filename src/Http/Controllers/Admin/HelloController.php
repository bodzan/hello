<?php
namespace Bradovanovic\Hello\Http\Controllers\Admin;

use Synergy\Access\Http\Controllers\AdminController;
use Synergy\Users\Repositories\UserRepositoryInterface;

class HelloController extends AdminController
{  
    protected $users;
    /**
     * Creates a new instance of the AdminHelloController.
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


