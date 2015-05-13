<?php

class CommentsController extends AppController
{
    

    public function add() {
        if($this->request->is('post')) {
            if($this->Comment->save($this->request->data)) {
                 $this->Session->setFlash('コメントを追加しました。');
                 $this->redirect(array('controller'=>'posts','action'=>'detail',$this->data['Comment']['post_id']));   
            } else {
                $this->Session->setFlash('エラー');
            }
        }
    }

   
}