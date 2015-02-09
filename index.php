<?php
include('/libs/youtube.php');

echo getYoutubeEmbed("https://www.youtube.com/watch?v=rnhkLvk7-2k");
echo "<br>";
echo getYoutubeEmbed("https://www.youtube.com/watch?v=6KpMYNw3Oz0&list=PLPv96SVEnDc0Ja1b64FXjNpJ4ujJkL1pi&index=5");
echo "<br>";
echo getYoutubeEmbed("http://youtu.be/6KpMYNw3Oz0?list=PLPv96SVEnDc0Ja1b64FXjNpJ4ujJkL1pi");
echo "<br>";
echo getYoutubeEmbed("https://www.youtube.com/watch?v=nBcg6SFg5Ag", array( 'rel'      => 1,
                                                                           'controls' => 1,
                                                                           'showinfo' => 1,
                                                                           'private'  => 1,
                                                                           'width'    => 1024,
                                                                           'height'   => 640
                                                                         ));
echo "<br>";
echo getYoutubeEmbed("https://www.youtube.com/watch?v=nBcg6SFg5Ag", array( 'rel'      => 0,
                                                                           'controls' => 0,
                                                                           'showinfo' => 0,
                                                                           'private'  => 0,
                                                                           'width'    => 1024,
                                                                           'height'   => 640
                                                                         ));
echo "<br>";