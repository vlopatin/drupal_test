(function ($) {
    Drupal.behaviors.custom_highcharts_charts = {
        attach: function () {
            if (Drupal.settings.custom_highcharts.charts) {
                for (var chart in Drupal.settings.custom_highcharts.charts) {
                    new Highcharts.Chart(Drupal.settings.custom_highcharts.charts[chart]);
                }
            }
        }
    };
})(jQuery);