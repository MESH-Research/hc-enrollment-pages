var gulp = require('gulp')
    browserSync = require('browser-sync').create()
    plumber = require('gulp-plumber'),
    env = require('dotenv').config();

gulp.task('serve', function() {

  browserSync.init({
    proxy: 'http://' + process.env.SITE_URL,
    logLevel: "info",
    files: [
      'after_submission/',
      'after_confirmation/',
      'css/',
      'discovery_service_enrollment/',
      'discovery_service_registry/',
      'discovery_service_wordpress/',
      'img/',
      'partials/',
      {
        fn: function( event, file ) {
          this.reload();
        }
      }
    ]
  });

});
