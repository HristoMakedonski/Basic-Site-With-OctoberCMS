<?php 
class Cms5b0869bb84c40962864559_3c1abba059f67b4bb9ea0d9b558eaa06Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
