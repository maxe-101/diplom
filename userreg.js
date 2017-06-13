(function($) {
Drupal.behaviors.myBehavior = {
  attach: function (context) {

    $("#edit-name").mask("99/99/9999");

  }
};
})(jQuery);
