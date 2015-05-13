<?php



class CategoriesController extends AppController
{
    public $uses = array('Post', 'User', 'Category');  
  
    public function index(){
    	 //カテゴリを全て取り出す
         $categories = $this->Category->find('all');
         $this->set('categories',$categories);

    }

    public function search(){
    	$category_id = $this->request->pass[0];
        $category = $this->Category->findById($category_id);
        $this->set('category',$category);
        
        $posts = $this->Post->find('all',
            array('conditions' => array('Post.category_id' => $category_id))
        );
        $this->set('posts',$posts);

        
    }

    public function add() {
        if($this->request->is('post')) {
            if($this->Category->save($this->request->data)) {
                 $this->Session->setFlash('カテゴリを追加しました。');
                 $this->redirect(array('controller'=>'categories','action'=>'index'));   
            } else {
                $this->Session->setFlash('エラー');
            }
        }
    }

}