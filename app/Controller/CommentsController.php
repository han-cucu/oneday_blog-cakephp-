<?php

class CommentsController extends AppController
{
    public $uses = array('Post', 'User', 'Category','Comment');

     //コメント一覧ページ
    public function index() {
        
        $post_id = $this->request->pass[0];
        
        $post = $this->Post->findById($post_id);
        $this->set('post',$post);
        
        $comments = $this->Comment->find('all',
            array('conditions' => array('Comment.post_id' => $post_id))
            );
        $this->set('comments',$comments);


    }
     //コメント追加ページ
    public function add() {

         $users = $this->User->find('list');
         $this->set('users',$users);

         $post_id = $this->request->pass[0];
         $post = $this->Post->findById($post_id);
         $this->set('post',$post);
         $comment = $this->Comment->findById($post_id);
         $this->set('comment',$comment);

        if ($this->request->is('comment')) {
            $comment = $this->request->data;

            $stat = $this->Comment->save($comment);
            if($stat) {
                $this->Session->setFlash('コメントを追加しました。');
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash('エラー');
            }
        }
    }
    

}