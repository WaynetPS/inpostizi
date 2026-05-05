db: docker-build
docker-build: build-back

build-back:
	docker-compose run --rm php sh -c "composer install"

build-back-prod:
	docker-compose run --rm php sh -c "composer install --no-dev -o"

auto-index:
	docker-compose run --rm php sh -c "vendor/bin/autoindex --exclude=_admin_dev,_assets,_dev,tests,vendor"
	cp src/index.php .

header-stamp:
	docker-compose run --rm php sh -c "vendor/bin/header-stamp --license=_assets/license.txt --exclude=_admin_dev,_dev,tests,vendor --extensions=php,js,css,scss,tpl,html.twig,vue --header-discrimination-string=InPost"

cs-fix:
	docker-compose run --rm php sh -c "vendor/bin/php-cs-fixer fix"

cs-fix-dist:
	docker-compose run --rm php sh -c "INPOST_IZI_DIST_BUILD=1 vendor/bin/php-cs-fixer fix"

update-headers: build-back auto-index header-stamp cs-fix-dist

build-zip:
	rm -rf inpostizi.zip
	cp -Ra $(PWD) /tmp/inpostizi
	rm -rf /tmp/inpostizi/composer.*
	rm -rf /tmp/inpostizi/config_*.xml
	rm -rf /tmp/inpostizi/.gitignore
	rm -rf /tmp/inpostizi/.git
	rm -rf /tmp/inpostizi/.php-cs-fixer.*
	rm -rf /tmp/inpostizi/_dev
	rm -rf /tmp/inpostizi/_admin_dev
	rm -rf /tmp/inpostizi/_assets
	rm -rf /tmp/inpostizi/tests
	rm -rf /tmp/inpostizi/translations/validators.php
	rm -rf /tmp/inpostizi/docker-compose.yml
	rm -rf /tmp/inpostizi/Makefile
	rm -rf /tmp/inpostizi/.gitlab-ci.yml
	mv -v /tmp/inpostizi $(PWD)/inpostizi
	zip -r inpostizi.zip inpostizi
	rm -rf $(PWD)/inpostizi

rm-uat-files:
	zip -d inpostizi.zip "inpostizi/src/Environment/UatEnvironment.php"

build-zip-prod: update-headers build-back-prod build-zip rm-uat-files
