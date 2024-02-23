# Собирает статику
build-static-win:
	docker run \
		--rm \
		-v %CD%:/usr/src/botec-web \
		-w /usr/src/botec-web \
		node:latest \
		/bin/sh -c \
		"npm install && npm run build"

