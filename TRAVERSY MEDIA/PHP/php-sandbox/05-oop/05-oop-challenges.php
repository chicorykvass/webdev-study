<?php

// PART 1
class Article {
  public $title, $content;
  private $published = false;

  public function __construct($title, $content) {
    $this->title = $title;
    $this->content = $content;
  }

  public function publish() {
    $this->published = true;
  }

  public function isPublished() {
    return $this->published;
  }
}

$article1 = new Article('Great News', 'America is Discovered!');
$article2 = new Article('Asian Revolution', 'China is the new USSR!');

$article1->publish();

echo var_export($article1->isPublished()) . '<br />';
echo var_export($article2->isPublished()) . '<br />';


// PART 2
class StringUtility {
  public static function shout($string) {
    return strtoupper($string) . '!';
  }

  public static function whisper($string) {
    return strtolower($string) . '.';
  }

  public static function repeat($string, $times = 2) {
    $result = '';
    for ($i = 0; $i < $times; $i++) {
      $result .= $string;
      if ($i !== $times - 1) $result .= '<br />';
    }
    return $result;
    // return str_repeat($string, $times);
  }
}

echo StringUtility::shout('The quick brown fox jumps over the lazy dog') . '<br />';
echo StringUtility::whisper('The quick brown fox jumps over the lazy dog') . '<br />';
echo StringUtility::repeat('The quick brown fox jumps over the lazy dog', 10);
