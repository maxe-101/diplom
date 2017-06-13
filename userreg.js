(function($) {
Drupal.behaviors.myBehavior = {
  attach: function (context) {
  $(document).ready(function() {
    $("#edit-name").mask("99/99/9999");
    });
  }
};
})(jQuery);
