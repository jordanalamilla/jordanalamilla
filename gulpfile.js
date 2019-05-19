const gulp          = require( 'gulp' );
const sass          = require( 'gulp-sass' );
const browserSync   = require( 'browser-sync' ).create();

/*
 * Declare the sass source files
 * and the destination for output
 * after compiling.
 */
gulp.task( 'sass', function() {
    
    return gulp
        .src( [ './scss/*.scss' ] )
        .pipe( sass().on('error', sass.logError) )
        .pipe( gulp.dest( [ './' ] ) )
        .pipe( browserSync.stream() );
});

/*
 * Watch and serve.
 */
gulp.task( 'serve', gulp.series( 'sass', function() {

    // Start broswer-sync
    // browserSync.init( { server: './' } );
    browserSync.init( { proxy: 'http://jordan.local/' } );

    // Watch for style changes
    gulp.watch( [ './scss/*.scss' ], gulp.series( 'sass' ) );

    // Watch for html changes
    gulp.watch( [ './*.php' ] ).on( 'change', browserSync.reload );
}));

// Default
gulp.task( 'default', gulp.series( 'serve' ) );