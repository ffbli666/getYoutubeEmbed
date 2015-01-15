<?php
include('/libs/youtube.php');

echo getYoutubeEmbed("https://www.youtube.com/watch?v=nBcg6SFg5Ag");
echo "<br>";
echo getYoutubeEmbed("http://youtu.be/nBcg6SFg5Ag");
echo "<br>";
echo getYoutubeEmbed("http://youtu.be/nBcg6SFg5Ag?t=1m29s");
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