(function ($) {
    alert('here');
    console.log('here');
  wp.customize("show_login_form_preview", function (value) {
    value.bind(function (newval) {
      if (newval) {
        // Show the login form in the Customizer preview
        $("body").html(
          '<iframe src="' +
            wp_login_url() +
            '" style="width: 100%; height: 100vh; border: none;"></iframe>'
        );
      } else {
        // If unchecked, reload the original page in the preview
        wp.customize.preview.send("refresh");
      }
    });
  });
})(jQuery);
