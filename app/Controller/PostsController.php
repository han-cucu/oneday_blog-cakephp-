<?php

class PostsController extends AppController
{
    public $uses = array('Post', 'User', 'Category');

     //記事一覧ページ
     public function index()
     {
         //投稿記事を全て取り出す
         $posts = $this->Post->find('all');
         $this->set('posts',$posts);
     }
     //記事詳細ページ
    public function detail() {
        $post_id = $this->request->pass[0];
        $post = $this->Post->findById($post_id);
        $this->set('post',$post);

    }
     //記事追加ページ
    public function add() {

         $users = $this->User->find('list');
         $categories = $this->Category->find('list');
         $this->set('users',$users);
         $this->set('categories',$categories);

        if ($this->request->is('post')) {
            $post = $this->request->data;

            $stat = $this->Post->save($post);
            if($stat) {
                $this->Session->setFlash('記事を追加しました。');
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash('エラー');
            }
        }
    }
     //記事削除
    public function delete() {
        $post_id = $this->request->pass[0];
        if ($this->request->is('post')) {
            $this->Post->delete($post_id);
            $this->Session->setFlash('記事を削除しました。');
            $this->redirect(array('action'=>'index'));
        } else {
            // 不正なアクセス
            $this->redirect('/');
        }
    }

    //記事編集
    public function edit() {
        $users = $this->User->find('list');
        $categories = $this->Category->find('list');
        $this->set('users',$users);
        $this->set('categories',$categories);

        $post_id = $this->request->pass[0];
        $post = $this->Post->findById($post_id);
        $this->set('post',$post);

        if ($this->request->is('post')) {
            $post = $this->request->data;

            $stat = $this->Post->save($post);
            if ($stat) {
                $this->Session->setFlash('記事を編集しました。');
                $this->redirect(array('action'=>'index'));
            } else {
                $this->Session->setFlash('エラー');
            }
        }
    }

}