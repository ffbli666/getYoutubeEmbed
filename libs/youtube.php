<?php
function getYoutubeID($url) {
    if (!$url) {
        return false;
    }
    $matches = array();
    if (!preg_match('/^(https?:\/\/)?(www\.youtube\.com\/watch\?v=|youtu.be\/)(?P<id>[0-9a-z-_]+)(?P<list>[&?]list=[0-9a-z-_]*)*/i', $url, $matches)) {
        return false;
    }
    if (isset($matches['list'])){
        $matches['list'] = substr($matches['list'], strpos($matches['list'], "=") + 1);        
    }
    return $matches;
}

function getYoutubeEmbed($url, $options = array()) {
    $youtube = getYoutubeID($url);
    if(!$youtube) {
        return false;
    }
// rel:      影片播放結束後顯示其他推薦影片
// controls: 顯示播放器控制選項
// showinfo: 顯示影片名稱和播放器操作
// private:  啟用隱私權加強保護模式 [?]
    $def_options = array(
                          'list'     => (isset($youtube['list'])) ? $youtube['list'] : '',
                          'rel'      => 0,
                          'controls' => 1,
                          'showinfo' => 1,
                          'private'  => 0,
                          'width'    => 560,
                          'height'   => 315
                        );
    if (count($options) > 0) {
        foreach ($def_options as $key=>$value) {
            if(isset($options[$key])) {
                $def_options[$key] = $options[$key];
            }
        }
    }
    $url = ($def_options['private']) ? '//www.youtube.com/embed/' : '//www.youtube-nocookie.com/embed/';
    unset($def_options['private']);
    
    $width = $def_options['width'];
    unset($def_options['width']);
    
    $height = $def_options['height'];
    unset($def_options['height']);

    $args = array();
    foreach ($def_options as $key=>$value) {
        if ($value)
            $args[] = $key . '=' . $value;
    }
    $arg = implode('&amp;', $args);
    $arg = ($arg) ? '?' . $arg : $arg;
    $full_url = $url . $youtube['id'] . $arg;

    return '<iframe width="'. $width .'" height="' . $height . '" src="' . $full_url . '" frameborder="0" allowfullscreen></iframe>';

}