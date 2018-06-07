<?php 
class Cms5b084f13bd0a9675357540_c007452f5a1bf3f29c266323f75162eeClass extends \Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
