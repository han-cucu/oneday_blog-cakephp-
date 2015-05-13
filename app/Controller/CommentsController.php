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

   public function delete() {
        $comment_id = $this->request->pass[0];
        $comment = $this->Comment->findById($comment_id);
        if ($this->request->is('post')) {
            $this->Comment->delete($comment_id);
            $this->Session->setFlash('コメントを削除しました。');
            $this->redirect(array('controller'=>'posts','action'=>'detail',$comment['Comment']['post_id']));
        } else {
            // 不正なアクセス
         $this->Session->setFlash('エラー');
        }
    }
}