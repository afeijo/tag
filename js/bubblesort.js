/**
 * @file
 * Handles the autoplay for bubblesort.
 */

(function ($) {
  // use behaviors, so it will run automatically on every ajax action
  Drupal.behaviors.bubblesort = {
    attach: function (context, settings) {

      // Function to auto clicks on the step button each second
      var autoPlay = function(){
        setTimeout(function(){
          $('.btn-step').unbind().click();
        }, 400);
      };

      // If the Play is checked, then run it
      if ($('.auto-play').is(':checked')) {
        autoPlay();
      }

      // Play it when the user clicks the checkbox
      $('.auto-play', context).click(function (e) {
        if ($(this).is(':checked')) {
          $('.btn-step').unbind().click();
        }
      });
    }
  };
}(jQuery));