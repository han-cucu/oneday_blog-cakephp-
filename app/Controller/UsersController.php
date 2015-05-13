 <?php



class UsersController extends AppController
{
    public $uses = array('Post', 'User', 'Category');  
  
    public function index(){
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

    public function add() {
        if($this->request->is('post')) {
            if($this->User->save($this->request->data)) {
                 $this->Session->setFlash('ユーザーを追加しました。');
                 $this->redirect(array('controller'=>'users','action'=>'index'));   
            } else {
                $this->Session->setFlash('エラー');
            }
        }
    }

}