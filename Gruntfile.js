module.exports = function(grunt) {
 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
		watch: {
			scripts: {
				files: ['wp-content/themes/icad_2016/dev/js/*.js'],
				tasks: ['concat', 'uglify'],
				options: {
					spawn: false,
				},
			},
			css: {
				files: ['wp-content/themes/icad_2016/dev/sass/*.scss'],
				tasks: ['sass'],
				options: {
					spawn: false,
				}
			},
			image: {
				files: ['wp-content/themes/icad_2016/dev/img/*.{png,jpg,gif}'],
				tasks: ['imagemin'],
				options: {
					spawn: false,
				}
			}
		},
		concat: {   
			dist: {
				src: [
					'wp-content/themes/icad_2016/dev/js/*.js'
				],
				dest: 'wp-content/themes/icad_2016/includes/js/main.js',
			}
		},
		uglify: {
			build: {
				src: 'wp-content/themes/icad_2016/includes/js/main.js',
				dest: 'wp-content/themes/icad_2016/includes/js/main.min.js'
			}
		}, 
		imagemin: {
			dynamic: {
				files: [{
					expand: true,
					cwd: 'wp-content/themes/icad_2016/dev/img/',
					src: ['**/*.{png,jpg,gif}'],
					dest: 'wp-content/themes/icad_2016/includes/img/'
				}]
			}
		},
		sass: {
			dist: {
				options: {
					style: 'compress'
				},
				files: {
					'wp-content/themes/icad_2016/includes/css/bootstrap.css': 'wp-content/themes/icad_2016/dev/sass/bootstrap.scss',
					'wp-content/themes/icad_2016/includes/css/main.css': 'wp-content/themes/icad_2016/dev/sass/main.scss'
				}
			} 
		},
		/*
		deploy: {
			liveservers: {
				options:{
					servers: [{
					host: '123.123.123.12',
					port: 22,
					username: 'username',
					password: 'password'
				}],
					cmds_before_deploy: ["some cmds you may want to exec before deploy"],
					cmds_after_deploy: ["forever restart", "some other cmds you want to exec after deploy"],
					deploy_path: 'your deploy path in server'
				}
			}
		},
		gitcommit: {
			your_target: {
				options: {
					cwd: "/path/to/repo"
				},
				files: [
					{
						src: ["fileone.txt", "filetwo.js"],
						expand: true,
						cwd: "/path/to/repo"
					}
				]
			}
		},
  	*/
    });

	grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-imagemin');

	//grunt.loadNpmTasks('grunt-deploy');
	//grunt.loadNpmTasks('grunt-git');

    grunt.registerTask('default', ['watch']);

};