 <?php



class UsersController extends AppController
{
    public $uses = array('Post', 'User', 'Category');  
  
    public function index(){
    	 //カテゴリを全て取り出す
         $users = $this->User->find('all');
         $this->set('users',$users);

    }

    public function search(){
    	$user_id = $this->request->pass[0];
        $user = $this->User->findById($user_id);
        $this->set('user',$user);
        
        $posts = $this->Post->find('all',
            array('conditions' => array('Post.user_id' => $user_id))
        );
        $this->set('posts',$posts);

        
    }

}