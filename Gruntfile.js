'use strict';

module.exports = function(grunt) {
 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            release: {
                src: 'assets/js/wpin-dc.js',
                dest: 'assets/js/wpin-dc.min.js'
            }
        },
        // https://www.npmjs.org/package/grunt-wp-i18n
        makepot: {
            target: {
                options: {
                    domainPath: '/languages/',    // Where to save the POT file.
                    potFilename: 'demo-customiser.pot',   // Name of the POT file.
                    type: 'wp-plugin'  // Type of project (wp-plugin or wp-theme).
                }
            }
        }
 
    });
	
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks( 'grunt-wp-i18n' );
 
    grunt.registerTask( 'release', [
        'uglify:release',
        'makepot'
    ]);
	
};