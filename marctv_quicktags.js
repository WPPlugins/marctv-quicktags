(function ($) {
  $(document).ready(function($) {
    new QTags({
      id: "comment",
      buttons: "link,em,strong"
    });
    QTags.addButton('quote','quote','<blockquote>','</blockquote>','quote');
   
  });
})(jQuery);