<?php
/**
 *  开发文档
 */
namespace DefaultApplication\Controller;


class DocumentsController extends AppController
{

    function home()
    {
        $posts = $this->loadModel('Posts')->find('all')->limit(10)->toArray();
        print_r($posts);
    }
}