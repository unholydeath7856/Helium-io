var customInputApp = (function ($) {
  //variables
  var selectInputSelector = '.js-select-skin';
  var selectClass = 'select-field';
  var currentSelectedElementClass = 'current';
  var dropDownClass = 'custom-dropdown';

  //functions
  var buildCustomDisplay = function () {

    var $selectFields = $(selectInputSelector);

    if ($selectFields.length > 0) {
      $selectFields.each(function () {
        var $currentSelect = $(this);
        $currentSelect.hide();

        var $selectOptions = $currentSelect.find('option');
        var $selectMarkup = $('<div>');
        var $dropDownList = $('<ul>');
        var $currentSelectedState = $('<div>');
        var id = 0;
        $selectOptions.each(function () {

          var $currentOption = $(this);
          $dropDownList.append('<li id='+ id +'>' + $currentOption.text() + '</li>');
          id++;
        });

        $selectMarkup.addClass(selectClass);
        $currentSelectedState.addClass(currentSelectedElementClass);
        $dropDownList.addClass(dropDownClass);
        $dropDownList.addClass('animation-target');

        $currentSelectedState.text($selectOptions.first().text());
        $selectMarkup.append($currentSelectedState).append($dropDownList);
        $('.select-container').append($selectMarkup);
      });
    }
  }

  var ignition = function () {
    buildCustomDisplay();
  }

  //return
  return {
    start: ignition
  };

})(jQuery);

$(document).ready(function () {
  customInputApp.start();
});
