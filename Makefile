OK_STRING=[OK]

#
## BUILD THEME
#

build:
	@cat ./assets/js/vendor/plugins/[!_*]* > ./assets/js/plugins.tmp.js
	@uglifyjs -o ./assets/js/plugins.min.js ./assets/js/plugins.tmp.js --source-map ./assets/js/plugins.min.js.map --source-map-root /assets/js/
	@rm ./assets/js/plugins.tmp.js

	@cat ./assets/js/app.js > ./assets/js/app.tmp.js
	@uglifyjs -o ./assets/js/app.min.js ./assets/js/app.tmp.js --source-map ./assets/js/app.min.js.map  --source-map-root /assets/js/
	@rm ./assets/js/app.tmp.js

	@echo "Compiling and minifying javascript...         ${OK_STRING}"